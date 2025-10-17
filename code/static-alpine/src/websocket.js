export function createWebSocketManager(callbacks) {
  let socket = null;
  let audioContext = null;
  let ttsWorkletNode = null;
  let isTTSPlaying = false;

  const base64ToInt16Array = (b64) => {
    const raw = atob(b64);
    const buf = new ArrayBuffer(raw.length);
    const view = new Uint8Array(buf);
    for (let i = 0; i < raw.length; i++) {
      view[i] = raw.charCodeAt(i);
    }
    return new Int16Array(buf);
  };

  const handleMessage = (data) => {
    const { type, content } = data;

    switch (type) {
      case 'tts_chunk':
        if (ttsWorkletNode && content) {
          const int16Data = base64ToInt16Array(content);
          ttsWorkletNode.port.postMessage(int16Data);
        }
        break;

      case 'tts_interruption':
      case 'stop_tts':
        if (ttsWorkletNode) {
          ttsWorkletNode.port.postMessage({ type: 'clear' });
        }
        isTTSPlaying = false;
        callbacks.onTTSStateChange?.(false);
        break;

      default:
        callbacks.onMessage?.(data);
    }
  };

  return {
    async connect() {
      if (socket?.readyState === WebSocket.OPEN) {
        console.log('Already connected');
        return;
      }

      // Initialize Audio Context for TTS
      if (!audioContext) {
        audioContext = new AudioContext({ sampleRate: 48000 });
        await audioContext.audioWorklet.addModule('/static/ttsPlaybackProcessor.js');

        ttsWorkletNode = new AudioWorkletNode(audioContext, 'tts-playback-processor');

        ttsWorkletNode.port.onmessage = (event) => {
          const { type } = event.data;
          if (type === 'ttsPlaybackStarted') {
            isTTSPlaying = true;
            callbacks.onTTSStateChange?.(true);
            if (socket?.readyState === WebSocket.OPEN) {
              socket.send(JSON.stringify({ type: 'tts_start' }));
            }
          } else if (type === 'ttsPlaybackStopped') {
            isTTSPlaying = false;
            callbacks.onTTSStateChange?.(false);
            if (socket?.readyState === WebSocket.OPEN) {
              socket.send(JSON.stringify({ type: 'tts_stop' }));
            }
          }
        };

        ttsWorkletNode.connect(audioContext.destination);
      }

      const wsProto = window.location.protocol === 'https:' ? 'wss:' : 'ws:';
      socket = new WebSocket(`${wsProto}//${window.location.host}/ws`);

      socket.onopen = () => {
        console.log('WebSocket connected');
        callbacks.onConnect?.();
      };

      socket.onmessage = (event) => {
        if (typeof event.data === 'string') {
          try {
            const message = JSON.parse(event.data);
            handleMessage(message);
          } catch (error) {
            console.error('Error parsing message:', error);
          }
        }
      };

      socket.onclose = () => {
        console.log('WebSocket disconnected');
        callbacks.onDisconnect?.();
      };

      socket.onerror = (error) => {
        console.error('WebSocket error:', error);
        callbacks.onDisconnect?.();
      };
    },

    disconnect() {
      if (socket) {
        socket.close();
        socket = null;
      }
      if (audioContext) {
        audioContext.close();
        audioContext = null;
      }
      if (ttsWorkletNode) {
        ttsWorkletNode.disconnect();
        ttsWorkletNode = null;
      }
    },

    sendAudio(audioBuffer) {
      if (socket?.readyState === WebSocket.OPEN) {
        socket.send(audioBuffer);
      }
    },

    clearHistory() {
      if (socket?.readyState === WebSocket.OPEN) {
        socket.send(JSON.stringify({ type: 'clear_history' }));
      }
    },

    setSpeed(speed) {
      if (socket?.readyState === WebSocket.OPEN) {
        socket.send(JSON.stringify({ type: 'set_speed', speed }));
      }
    }
  };
}
