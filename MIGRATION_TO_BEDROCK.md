# Migration Guide: Ollama → Bedrock Default

## What Changed?

**Before**: Ollama was the default LLM provider
**After**: Bedrock is now the default LLM provider

## Why the Change?

1. **Smaller deployment**: No Ollama container (saves 2-5GB)
2. **Better for production**: Managed service, better scaling
3. **Cost-effective**: Pay per use vs running GPU 24/7
4. **Easier setup**: No need to download/manage models

## If You Were Using Ollama

### Option 1: Switch to Bedrock (Recommended)

**Step 1**: Get AWS credentials and Bedrock Agent
- Create AWS account
- Set up Bedrock Agent in AWS Console
- Get Agent ID and Alias ID

**Step 2**: Configure
```bash
# Create .env file
cp .env.example .env

# Edit .env:
LLM_PROVIDER=bedrock
BEDROCK_AGENT_ID=your_agent_id
BEDROCK_AGENT_ALIAS_ID=your_alias_id
AWS_ACCESS_KEY_ID=your_key
AWS_SECRET_ACCESS_KEY=your_secret
```

**Step 3**: Deploy
```bash
# Remove old containers
docker-compose down

# Start with Bedrock
docker-compose up -d
```

**Benefits**:
- ✅ Smaller deployment (5GB vs 7-10GB)
- ✅ No model downloads
- ✅ Better reliability
- ✅ Easier scaling

### Option 2: Keep Using Ollama

**Step 1**: Use Ollama compose file
```bash
# Option A: Use dedicated file
docker-compose -f docker-compose.ollama.yml up -d

# Option B: Set environment variable
export LLM_PROVIDER=ollama
docker-compose up -d

# Option C: Edit docker-compose.yml
# Uncomment the ollama service section
```

**Step 2**: Verify
```bash
docker-compose logs app | grep "LLM"
# Should see: Provider: ollama
```

## Configuration Comparison

### Before (Ollama Default)
```yaml
# docker-compose.yml
services:
  app:
    environment:
      - OLLAMA_BASE_URL=http://ollama:11434
    depends_on:
      - ollama
  
  ollama:
    image: ollama/ollama:latest
    # ... full service config
```

### After (Bedrock Default)
```yaml
# docker-compose.yml
services:
  app:
    environment:
      - LLM_PROVIDER=bedrock
      - BEDROCK_AGENT_ID=${BEDROCK_AGENT_ID}
      - AWS_ACCESS_KEY_ID=${AWS_ACCESS_KEY_ID}
      # ... AWS credentials
  
  # ollama service commented out
```

## Environment Variables

### Before
```bash
# .env (Ollama)
LLM_PROVIDER=ollama  # or not set (was default)
LLM_MODEL=llama3.2:latest
OLLAMA_BASE_URL=http://ollama:11434
```

### After
```bash
# .env (Bedrock)
LLM_PROVIDER=bedrock  # or not set (now default)
BEDROCK_AGENT_ID=your_agent_id
BEDROCK_AGENT_ALIAS_ID=your_alias_id
AWS_ACCESS_KEY_ID=your_key
AWS_SECRET_ACCESS_KEY=your_secret
```

## Code Changes

### ✅ No Code Changes Needed!

The application automatically detects the LLM provider from environment variables.

```python
# code/server.py
LLM_START_PROVIDER = os.getenv("LLM_PROVIDER", "bedrock")  # Changed default
```

## Docker Compose Files

We now provide three compose files:

1. **`docker-compose.yml`** - Bedrock (default)
2. **`docker-compose.ollama.yml`** - Ollama setup
3. **`docker-compose.bedrock.yml`** - Explicit Bedrock (same as default)

Use whichever fits your needs:
```bash
# Bedrock (default)
docker-compose up -d

# Ollama
docker-compose -f docker-compose.ollama.yml up -d

# Explicit Bedrock
docker-compose -f docker-compose.bedrock.yml up -d
```

## Rollback Plan

If you need to rollback to Ollama:

### Quick Rollback
```bash
# Set environment variable
export LLM_PROVIDER=ollama

# Restart
docker-compose down
docker-compose up -d
```

### Full Rollback
```bash
# Use Ollama compose file
docker-compose -f docker-compose.ollama.yml up -d
```

### Edit Default
```python
# code/server.py - change line ~38
LLM_START_PROVIDER = os.getenv("LLM_PROVIDER", "ollama")  # Change back
```

## Testing

### Test Bedrock
```bash
# Check logs
docker-compose logs app | grep "Bedrock"

# Should see:
# 🖥️⚙️ [LLM] Using Bedrock Agent: YOUR_AGENT_ID
# 🗣️🤖 Initializing Bedrock Agent LLM
# 🤖✅ Bedrock Agent client initialized successfully
```

### Test Ollama
```bash
# Check logs
docker-compose -f docker-compose.ollama.yml logs app | grep "ollama"

# Should see:
# 🖥️⚙️ [LLM] Provider: ollama
```

## Cost Impact

### Before (Ollama)
- **Infrastructure**: GPU running 24/7
- **Cost**: ~$50-100/month (electricity + hardware)
- **Scaling**: Need more GPUs

### After (Bedrock)
- **Infrastructure**: Pay per use
- **Cost**: ~$5-60/month (depends on usage)
- **Scaling**: Automatic

**Example**: 1000 conversations/month
- Ollama: ~$75/month (fixed)
- Bedrock: ~$5/month (variable)

## Support

### Bedrock Setup Help
- **Quick Start**: `code/BEDROCK_QUICKSTART.md`
- **Full Guide**: `code/BEDROCK_INTEGRATION.md`
- **Docker Info**: `code/DOCKER_AND_BEDROCK.md`

### Ollama Setup Help
- Use `docker-compose.ollama.yml`
- Set `LLM_PROVIDER=ollama`
- Uncomment ollama service in `docker-compose.yml`

### Issues?
1. Check logs: `docker-compose logs app`
2. Verify environment variables: `docker-compose config`
3. Test provider: See testing section above

## FAQ

**Q: Do I have to use Bedrock now?**
A: No! Set `LLM_PROVIDER=ollama` to keep using Ollama.

**Q: Will my existing setup break?**
A: No, if you have `LLM_PROVIDER=ollama` in your environment, it will continue working.

**Q: Can I switch back and forth?**
A: Yes! Just change the `LLM_PROVIDER` environment variable.

**Q: What if I don't have AWS credentials?**
A: Use Ollama: `docker-compose -f docker-compose.ollama.yml up -d`

**Q: Is Bedrock more expensive?**
A: Usually cheaper for moderate usage. See cost comparison above.

**Q: Do I need to rebuild Docker images?**
A: No! Just change environment variables and restart.

---

**Summary**: Bedrock is now default, but you can easily keep using Ollama by setting `LLM_PROVIDER=ollama` or using `docker-compose.ollama.yml`.
