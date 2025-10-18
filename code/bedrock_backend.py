"""
Bedrock backend helper for Agents for Amazon Bedrock runtime.

Features:
- Lazy boto3 client initialization (bedrock-agent-runtime)
- Streaming iterator (yield low-level events)
- Session manager for sessionId reuse/expiry
- Cancellation token support (client-side)
- Callback integration helper
- Basic error mapping and retries

Requirements:
- boto3 >= recent (make sure to update if streaming behavior changed)
- AWS credentials set in env / profile / role (AWS_ACCESS_KEY_ID, AWS_SECRET_ACCESS_KEY,
  or use instance/role credentials)
"""

from __future__ import annotations
import os
import time
import uuid
import logging
import threading
from typing import Generator, Optional, Dict, Any, Callable, Iterable, Tuple

import boto3
from botocore.exceptions import ClientError, BotoCoreError
from botocore.config import Config as BotoConfig

# Keep app logs at INFO, but silence noisy libraries
logger = logging.getLogger(__name__)
logging.getLogger().setLevel(logging.INFO)

# Mute botocore & related internals (parsers, hooks, endpoint, retry, urllib3)
for name in (
    "botocore",
    "botocore.parsers",
    "botocore.hooks",
    "botocore.endpoint",
    "botocore.retries",
    "boto3",
    "urllib3",
):
    logging.getLogger(name).setLevel(logging.WARNING)

# -------------------------
# Environment defaults
# -------------------------
DEFAULT_AWS_REGION = os.environ.get("AWS_REGION", "us-west-2")
DEFAULT_AGENT_ID = os.environ.get("BEDROCK_AGENT_ID", "")
DEFAULT_AGENT_ALIAS_ID = os.environ.get("BEDROCK_AGENT_ALIAS_ID", "")
DEFAULT_GUARDRAIL_INTERVAL = int(os.environ.get("BEDROCK_GUARDRAIL_INTERVAL", "10"))
DEFAULT_SESSION_EXPIRY = int(os.environ.get("BEDROCK_SESSION_EXPIRY_SECONDS", "3600"))
DEFAULT_RETRY_ATTEMPTS = int(os.environ.get("BEDROCK_RETRY_ATTEMPTS", "3"))

# -------------------------
# Exceptions
# -------------------------
class BedrockError(Exception):
    pass

class BedrockResourceNotFound(BedrockError):
    pass

class BedrockValidationError(BedrockError):
    pass

class BedrockThrottlingError(BedrockError):
    pass

class BedrockAccessDenied(BedrockError):
    pass

class BedrockInternalError(BedrockError):
    pass

# -------------------------
# Session manager
# -------------------------
class BedrockSessionManager:
    """
    Simple in-memory session manager. Create or reuse session IDs and expire them after inactivity.
    In production, tie sessions to user ids / websocket connections and persist them if needed.
    """
    def __init__(self, expiry_seconds: int = DEFAULT_SESSION_EXPIRY):
        self._sessions: Dict[str, Dict[str, Any]] = {}
        self._lock = threading.Lock()
        self.expiry_seconds = expiry_seconds

    def create_session(self, tag: Optional[str] = None) -> str:
        sid = str(uuid.uuid4())
        now = time.time()
        with self._lock:
            self._sessions[sid] = {"tag": tag, "created_at": now, "last_used": now}
        logger.debug("Created Bedrock session %s (tag=%s)", sid, tag)
        return sid

    def touch(self, session_id: str):
        now = time.time()
        with self._lock:
            if session_id in self._sessions:
                self._sessions[session_id]["last_used"] = now

    def get_or_create(self, session_id: Optional[str], tag: Optional[str] = None) -> str:
        # If provided and present, touch and return. Otherwise create new.
        if session_id:
            with self._lock:
                if session_id in self._sessions:
                    self._sessions[session_id]["last_used"] = time.time()
                    return session_id
        return self.create_session(tag=tag)

    def cleanup_expired(self):
        now = time.time()
        with self._lock:
            expired = [sid for sid, v in self._sessions.items() if (now - v["last_used"]) > self.expiry_seconds]
            for sid in expired:
                logger.debug("Expiring session %s", sid)
                del self._sessions[sid]

# -------------------------
# Cancellation token
# -------------------------
class CancellationToken:
    """Simple thread-safe cancellation token used to interrupt streaming loops on the client side."""
    def __init__(self):
        self._event = threading.Event()

    def cancel(self):
        self._event.set()

    def is_cancelled(self) -> bool:
        return self._event.is_set()

# -------------------------
# Bedrock client wrapper
# -------------------------
class BedrockClientWrapper:
    """
    Wrapper around the boto3 'bedrock-agent-runtime' client with lazy initialization and an event-stream
    friendly helper (invoke_agent streaming).
    """
    def __init__(self, region_name: str = DEFAULT_AWS_REGION, boto_config: Optional[BotoConfig] = None):
        self.region_name = region_name
        self.boto_config = boto_config or BotoConfig(retries={"max_attempts": 3})
        self._client = None
        self._client_lock = threading.Lock()
        
        # Validate that required IDs are provided
        if not DEFAULT_AGENT_ID:
            raise ValueError("BEDROCK_AGENT_ID environment variable must be set")
        if not DEFAULT_AGENT_ALIAS_ID:
            raise ValueError("BEDROCK_AGENT_ALIAS_ID environment variable must be set")

    def _lazy_init(self):
        with self._client_lock:
            if self._client is None:
                logger.info("Initializing Bedrock client in region %s", self.region_name)
                # boto3 will resolve credentials from environment/profile/role
                try:
                    self._client = boto3.client("bedrock-agent-runtime", region_name=self.region_name, config=self.boto_config)
                except Exception as e:
                    logger.exception("Failed to initialize bedrock-agent-runtime client")
                    raise BedrockError("Failed to initialize Bedrock client") from e
        return self._client

    @property
    def client(self):
        return self._lazy_init()

    def _map_client_error(self, exc: ClientError) -> BedrockError:
        code = exc.response.get("Error", {}).get("Code", "")
        msg = str(exc)
        if code in ("ResourceNotFoundException", "NotFoundException"):
            return BedrockResourceNotFound(msg)
        if code in ("ValidationException",):
            return BedrockValidationError(msg)
        if code in ("ThrottlingException", "Throttling"):
            return BedrockThrottlingError(msg)
        if code in ("AccessDeniedException", "UnauthorizedOperation"):
            return BedrockAccessDenied(msg)
        if code in ("InternalServerException", "InternalError"):
            return BedrockInternalError(msg)
        return BedrockError(msg)

    def invoke_agent_stream(self,
                            agent_id: str,
                            agent_alias_id: Optional[str],
                            session_id: str,
                            input_text: str,
                            streaming_config: Optional[Dict[str, Any]] = None,
                            enable_trace: bool = False,
                            end_session: bool = False,
                            max_retries: int = DEFAULT_RETRY_ATTEMPTS
                            ) -> Generator[Dict[str, Any], None, None]:
        """
        Invoke `invoke_agent` and yield normalized low-level events from the response stream.
        Yields dicts of the form:
          - {"chunk": b"..."}   # bytes
          - {"trace": {...}}    # trace dict
          - {"completion": True}

        Important param names (per docs):
          - agentId (str)
          - agentAliasId (str)  # optional
          - sessionId (str)
          - inputText (str)
          - streamingConfigurations (dict)
          - enableTrace (bool)
          - endSession (bool)
        """
        client = self.client

        if streaming_config is None:
            streaming_config = {
                "streamFinalResponse": True,
                "applyGuardrailInterval": DEFAULT_GUARDRAIL_INTERVAL,
            }

        # Build kwargs following exact names from AWS docs
        kwargs = {
            "agentId": agent_id,
            "sessionId": session_id,
            "inputText": input_text,
            "streamingConfigurations": streaming_config,
            "enableTrace": enable_trace,
            "endSession": end_session,
        }
        # agentAliasId is optional
        if agent_alias_id:
            kwargs["agentAliasId"] = agent_alias_id

        # remove any None values (defensive)
        kwargs = {k: v for k, v in kwargs.items() if v is not None}

        attempts = 0
        backoff = 0.5
        while attempts < max_retries:
            attempts += 1
            try:
                logger.debug("Calling invoke_agent: agent=%s alias=%s session=%s", agent_id, agent_alias_id, session_id)
                resp = client.invoke_agent(**kwargs)
                # According to the SDK and docs, resp contains a 'completion' field that is an EventStream iterator
                stream = resp.get("completion")
                # If the service returns no 'completion' stream (older behavior or errors), fallback to scalar outputs.
                if stream is None:
                    # Try common fields fallback: outputText or responseText (non-standard)
                    text = resp.get("outputText") or resp.get("response") or resp.get("output") or ""
                    logger.debug("No streaming 'completion' in response; falling back to full-text.")
                    yield {"chunk": (text or "").encode("utf-8")}
                    yield {"completion": True}
                    return

                # Iterate the EventStream. Each `event` is typically a dict-like object
                for event in stream:
                    # event may contain keys like 'chunk', 'trace', 'completion'
                    if "chunk" in event:
                        # chunk is a dict with key "bytes"
                        bytes_obj = event["chunk"].get("bytes") if isinstance(event["chunk"], dict) else event["chunk"]
                        # ensure we yield raw bytes for upstream to decode
                        yield {"chunk": bytes_obj}
                    elif "trace" in event:
                        yield {"trace": event["trace"]}
                    elif "completion" in event:
                        yield {"completion": True}
                        return
                # If stream closed without explicit completion, still signal completion
                yield {"completion": True}
                return

            except ClientError as ce:
                # Map errors to our exceptions
                mapped = self._map_client_error(ce)
                logger.exception("ClientError calling Bedrock invoke_agent (attempt %d/%d): %s", attempts, max_retries, mapped)
                # For some errors, we might want to raise immediately
                if isinstance(mapped, (BedrockResourceNotFound, BedrockValidationError, BedrockAccessDenied)):
                    raise mapped from ce
                # retryable errors (throttling/internal) -> retry
                if attempts < max_retries:
                    sleep = backoff * attempts
                    logger.warning("Retrying in %.2f seconds...", sleep)
                    time.sleep(sleep)
                    continue
                raise mapped from ce
            except BotoCoreError as bce:
                logger.exception("BotoCoreError during invoke_agent")
                if attempts < max_retries:
                    time.sleep(backoff * attempts)
                    continue
                raise BedrockError(str(bce)) from bce
            except Exception as e:
                logger.exception("Unexpected error invoking Bedrock agent")
                raise

# -------------------------
# Helpers: convert low-level events into typed stream for consumers
# -------------------------
def _yield_bedrock_chunks(event_iter: Iterable[Dict[str, Any]]) -> Generator[Tuple[str, Any], None, None]:
    """
    Normalize low-level events into ("chunk", text) / ("trace", trace_dict) / ("completion", None).
    Consumers can iterate and handle accordingly.
    """
    for ev in event_iter:
        if "chunk" in ev:
            raw = ev["chunk"]
            # raw may already be bytes or a bytes-like object
            try:
                text = raw.decode("utf-8")
            except Exception:
                # fallback with replacement to avoid decode errors
                text = raw.decode("utf-8", errors="replace") if isinstance(raw, (bytes, bytearray)) else str(raw)
            yield ("chunk", text)
        elif "trace" in ev:
            yield ("trace", ev["trace"])
        elif "completion" in ev:
            yield ("completion", None)

# -------------------------
# High level integration helper
# -------------------------
def invoke_bedrock_with_callbacks(agent_id: str,
                                  alias_id: Optional[str],
                                  session_id: str,
                                  prompt: str,
                                  client_wrapper: BedrockClientWrapper,
                                  on_chunk: Optional[Callable[[str], None]] = None,
                                  on_trace: Optional[Callable[[Dict[str, Any]], None]] = None,
                                  on_complete: Optional[Callable[[], None]] = None,
                                  cancel_token: Optional[CancellationToken] = None,
                                  streaming_config: Optional[Dict[str, Any]] = None,
                                  enable_trace: bool = False,
                                  end_session: bool = False):
    """
    Integrates the low-level stream with your callbacks. This is the function you should call from your LLM
    streaming code path. It decodes chunks and emits them incrementally to `on_chunk`.
    """
    cancel_token = cancel_token or CancellationToken()

    try:
        low_level_iter = client_wrapper.invoke_agent_stream(
            agent_id=agent_id,
            agent_alias_id=alias_id,
            session_id=session_id,
            input_text=prompt,
            streaming_config=streaming_config,
            enable_trace=enable_trace,
            end_session=end_session,
        )
        for kind, payload in _yield_bedrock_chunks(low_level_iter):
            if cancel_token.is_cancelled():
                logger.info("Cancellation requested - stopping local consumption of Bedrock stream.")
                # We break the loop — Bedrock service might still be generating server-side.
                break
            if kind == "chunk":
                if on_chunk:
                    on_chunk(payload)
            elif kind == "trace":
                if on_trace:
                    on_trace(payload)
            elif kind == "completion":
                if on_complete:
                    on_complete()
                break
    except BedrockError:
        logger.exception("BedrockError in invoke_bedrock_with_callbacks")
        raise
    except Exception:
        logger.exception("Unhandled exception in invoke_bedrock_with_callbacks")
        raise

# -------------------------
# Example usage (CLI style)
# -------------------------
if __name__ == \"__main__\":\n    # Minimal demo - adapt to your callback signatures\n    logging.basicConfig(level=logging.DEBUG)\n\n    agent_id = os.environ.get(\"BEDROCK_AGENT_ID\")\n    alias_id = os.environ.get(\"BEDROCK_AGENT_ALIAS_ID\")\n    if not agent_id or not alias_id:\n        raise SystemExit(\"Set both BEDROCK_AGENT_ID and BEDROCK_AGENT_ALIAS_ID environment variables to test this demo.\")\n\n    client = BedrockClientWrapper(region_name=os.environ.get(\"AWS_REGION\", DEFAULT_AWS_REGION))\n    sessions = BedrockSessionManager()\n\n    sid = sessions.create_session(tag=\"demo-cli\")\n\n    def on_chunk(text: str):\n        print(text, end=\"\", flush=True)\n\n    def on_trace(t: Dict[str, Any]):\n        print(\"\\n[TRACE]\", t)\n\n    def on_complete():\n        print(\"\\n\\n[COMPLETE]\")\n\n    prompt = \"Tell me a long story so streaming happens — include many sentences so we can observe multiple chunks.\"\n    invoke_bedrock_with_callbacks(\n        agent_id=agent_id,\n        alias_id=alias_id,\n        session_id=sid,\n        prompt=prompt,\n        client_wrapper=client,\n        on_chunk=on_chunk,\n        on_trace=on_trace,\n        on_complete=on_complete,\n        cancel_token=None,\n        streaming_config={\"streamFinalResponse\": True, \"applyGuardrailInterval\": 10},\n        enable_trace=False,\n        end_session=False,\n    )
