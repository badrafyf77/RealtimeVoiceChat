# Docker Setup & Bedrock Integration Explained

## Current Setup: Ollama (Default)

### What You Have Now
```yaml
# docker-compose.yml
services:
  app:           # Your voice chat (5GB image)
  ollama:        # Local LLM server (separate container)
```

**Default LLM Provider**: `ollama` (NOT Bedrock)
- Configured in `code/server.py`: `LLM_START_PROVIDER = os.getenv("LLM_PROVIDER", "ollama")`
- Docker Compose sets: `OLLAMA_BASE_URL=http://ollama:11434`

### Why 5GB Docker Image?

Your `app` container is large because it includes:

| Component | Size | Why Needed |
|-----------|------|------------|
| NVIDIA CUDA base | ~3GB | GPU acceleration for TTS |
| PyTorch + CUDA | ~2GB | Neural network inference |
| DeepSpeed | ~500MB | TTS optimization (Coqui) |
| ML Models | ~500MB | Silero VAD, Whisper, Sentence classifier |
| **Total** | **~5GB** | **This is normal for GPU ML apps** |

### What Ollama Does
- Runs LLM models locally (llama, mistral, etc.)
- Separate container with its own GPU access
- Stores models in `ollama_data` volume
- Adds another ~2-5GB depending on model

**Total Docker footprint: ~7-10GB** (app + ollama + models)

---

## Option 1: Switch to Bedrock (Reduce Size)

### Benefits
- ✅ **Smaller image**: ~1-2GB (no heavy CUDA/PyTorch needed for LLM)
- ✅ **No Ollama container**: Remove entire service
- ✅ **Managed LLM**: AWS handles model hosting
- ✅ **Better scaling**: No local GPU needed for LLM
- ✅ **Cost-effective**: Pay per token, not for idle GPU

### How to Switch

#### Step 1: Update docker-compose.yml
```yaml
services:
  app:
    build: .
    container_name: realtime-voice-chat-app
    ports:
      - "8000:8000"
    environment:
      # Switch to Bedrock
      - LLM_PROVIDER=bedrock
      - BEDROCK_AGENT_ID=YOUR_AGENT_ID
      - BEDROCK_AGENT_ALIAS_ID=YOUR_ALIAS_ID
      - BEDROCK_REGION=us-west-2
      
      # AWS Credentials
      - AWS_ACCESS_KEY_ID=${AWS_ACCESS_KEY_ID}
      - AWS_SECRET_ACCESS_KEY=${AWS_SECRET_ACCESS_KEY}
      - AWS_REGION=us-west-2
      
      # Other settings (unchanged)
      - LOG_LEVEL=${LOG_LEVEL:-INFO}
      - MAX_AUDIO_QUEUE_SIZE=${MAX_AUDIO_QUEUE_SIZE:-50}
    volumes:
       - huggingface_cache:/home/appuser/.cache/huggingface
       - torch_cache:/home/appuser/.cache/torch
    # Remove depends_on: ollama
    deploy:
      resources:
        reservations:
          devices:
            - driver: nvidia
              count: all
              capabilities: [gpu, compute, utility]
    restart: unless-stopped

  # Remove entire ollama service

volumes:
  # Remove ollama_data volume
  huggingface_cache:
    driver: local
  torch_cache:
    driver: local
```

#### Step 2: Create .env file
```bash
# .env
LLM_PROVIDER=bedrock
BEDROCK_AGENT_ID=YOUR_AGENT_ID
BEDROCK_AGENT_ALIAS_ID=YOUR_ALIAS_ID
BEDROCK_REGION=us-west-2

# AWS Credentials
AWS_ACCESS_KEY_ID=your_key
AWS_SECRET_ACCESS_KEY=your_secret
AWS_REGION=us-west-2
```

#### Step 3: Rebuild
```bash
docker-compose down
docker-compose up -d --build
```

### Image Size Comparison

| Setup | App Image | Ollama | Total |
|-------|-----------|--------|-------|
| **Current (Ollama)** | 5GB | 2-5GB | 7-10GB |
| **With Bedrock** | 5GB | 0GB | 5GB |
| **Bedrock + Optimized** | 1-2GB | 0GB | 1-2GB |

---

## Option 2: Keep Ollama (Current Setup)

### When to Use Ollama
- ✅ Need offline/local LLM
- ✅ Have GPU available
- ✅ Want full control over model
- ✅ Privacy concerns (data stays local)
- ✅ No AWS account

### Optimize Current Setup

#### Reduce Model Size
```bash
# In docker-compose.yml, after ollama starts:
docker exec realtime-voice-chat-ollama ollama pull llama3.2:1b  # Smaller model
```

#### Use CPU-only Base Image (if no GPU)
```dockerfile
# In Dockerfile, change:
FROM nvidia/cuda:12.1.1-cudnn8-devel-ubuntu22.04
# To:
FROM ubuntu:22.04
```
This reduces image to ~2GB but loses GPU acceleration.

---

## Option 3: Hybrid Setup

### Use Bedrock for LLM, Keep GPU for TTS
- LLM: Bedrock (managed, scalable)
- TTS: Local GPU (low latency, no API calls)

**Best of both worlds!**

```yaml
# docker-compose.yml
services:
  app:
    environment:
      - LLM_PROVIDER=bedrock  # Use Bedrock for LLM
      - BEDROCK_AGENT_ID=...
      # TTS still uses local GPU (Kokoro/Orpheus)
```

**Image size**: 5GB (same as current, but no Ollama container)
**Total**: 5GB (vs 7-10GB with Ollama)

---

## Quick Comparison

| Feature | Ollama | Bedrock | Hybrid |
|---------|--------|---------|--------|
| **Image Size** | 5GB | 5GB | 5GB |
| **Extra Containers** | +Ollama (2-5GB) | None | None |
| **Total Size** | 7-10GB | 5GB | 5GB |
| **GPU Needed** | Yes (LLM+TTS) | Yes (TTS only) | Yes (TTS only) |
| **Internet Required** | No | Yes | Yes |
| **Cost** | GPU electricity | AWS tokens | AWS tokens |
| **Latency** | Low | Medium | Low (TTS), Medium (LLM) |
| **Privacy** | Full | AWS managed | Mixed |

---

## Recommended Setup by Use Case

### 1. Production Voice Chat (Public)
**→ Use Bedrock (Hybrid)**
- Managed LLM, reliable scaling
- Local TTS for low latency
- 5GB total, no Ollama

### 2. Development/Testing
**→ Keep Ollama**
- Work offline
- Iterate quickly
- 7-10GB is fine for dev

### 3. Privacy-Critical
**→ Keep Ollama**
- All data stays local
- Full control
- Accept larger size

### 4. Cost-Optimized
**→ Use Bedrock**
- Pay per use
- No idle GPU costs
- Smaller deployment

---

## How to Switch Between Them

### Switch to Bedrock
```bash
# Set environment variable
export LLM_PROVIDER=bedrock
export BEDROCK_AGENT_ID=YOUR_ID
export BEDROCK_AGENT_ALIAS_ID=YOUR_ALIAS

# Or edit docker-compose.yml
docker-compose down
docker-compose up -d
```

### Switch back to Ollama
```bash
# Set environment variable
export LLM_PROVIDER=ollama
export OLLAMA_BASE_URL=http://ollama:11434

# Or edit docker-compose.yml
docker-compose down
docker-compose up -d
```

**No code changes needed!** Everything is configured via environment variables.

---

## FAQ

### Q: Why is the image 5GB?
**A**: GPU-accelerated ML requires CUDA (~3GB) + PyTorch (~2GB). This is normal.

### Q: Can I reduce it?
**A**: Yes, but you'll lose GPU acceleration:
- Remove CUDA → ~2GB (CPU-only, slower TTS)
- Use Bedrock → Remove Ollama container (saves 2-5GB)

### Q: Is Bedrock the default?
**A**: No, Ollama is the default. Set `LLM_PROVIDER=bedrock` to switch.

### Q: Do I need to rebuild for Bedrock?
**A**: No! Just change environment variables in docker-compose.yml.

### Q: Will Bedrock work in Docker?
**A**: Yes, as long as you provide AWS credentials via environment variables.

### Q: Can I use both?
**A**: Yes! Switch via `LLM_PROVIDER` environment variable.

---

## Next Steps

1. **Decide**: Ollama (local) vs Bedrock (managed)
2. **Configure**: Update docker-compose.yml or .env
3. **Deploy**: `docker-compose up -d`
4. **Monitor**: Check logs and performance
5. **Optimize**: Adjust based on usage

See `BEDROCK_QUICKSTART.md` for Bedrock setup details.
