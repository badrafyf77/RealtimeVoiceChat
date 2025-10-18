# ✨ Bedrock is Now the Default LLM Provider

## What Changed?

**Default LLM Provider**: `bedrock` (was `ollama`)

This means:
- ✅ Bedrock Agent is used by default
- ✅ No Ollama container needed (saves 2-5GB)
- ✅ Smaller deployment footprint
- ✅ Managed LLM service

## Quick Start with Bedrock

### 1. Set AWS Credentials

**Option A: Environment Variables**
```bash
export AWS_ACCESS_KEY_ID=your_key
export AWS_SECRET_ACCESS_KEY=your_secret
export AWS_REGION=us-west-2
```

**Option B: Create .env file**
```bash
cp .env.example .env
# Edit .env with your AWS credentials and Bedrock Agent IDs
```

### 2. Configure Bedrock Agent

Edit `.env`:
```bash
BEDROCK_AGENT_ID=YOUR_AGENT_ID
BEDROCK_AGENT_ALIAS_ID=YOUR_ALIAS_ID
BEDROCK_REGION=us-west-2

AWS_ACCESS_KEY_ID=your_key
AWS_SECRET_ACCESS_KEY=your_secret
AWS_REGION=us-west-2
```

### 3. Run

```bash
docker-compose up -d
```

That's it! Your voice chat now uses Bedrock Agent.

## Switch Back to Ollama

If you want to use Ollama instead:

### Option 1: Environment Variable
```bash
export LLM_PROVIDER=ollama
docker-compose up -d
```

### Option 2: Edit docker-compose.yml
```yaml
services:
  app:
    environment:
      - LLM_PROVIDER=ollama  # Change from bedrock
    depends_on:
      - ollama  # Uncomment this line

  # Uncomment the entire ollama service section
  ollama:
    image: ollama/ollama:latest
    # ... rest of config
```

### Option 3: Use Ollama Compose File
```bash
# Rename files
mv docker-compose.yml docker-compose.bedrock.yml
mv docker-compose.ollama.yml docker-compose.yml  # If you have one

# Or use -f flag
docker-compose -f docker-compose.ollama.yml up -d
```

## Benefits of Bedrock Default

### ✅ Pros
- **Smaller deployment**: No Ollama container (saves 2-5GB)
- **Managed service**: AWS handles model hosting
- **Better scaling**: No local GPU needed for LLM
- **Cost-effective**: Pay per token, not for idle GPU
- **Reliable**: AWS SLA and uptime guarantees

### ⚠️ Cons
- **Requires AWS account**: Need credentials
- **Internet required**: Can't work offline
- **AWS costs**: Pay per token usage
- **Latency**: Slightly higher than local (but still fast)

## Cost Estimate

**Typical voice conversation** (500 tokens):
- Input: ~200 tokens × $0.003/1K = $0.0006
- Output: ~300 tokens × $0.015/1K = $0.0045
- **Total: ~$0.005 per conversation**

**Monthly estimate** (1000 conversations):
- ~$5/month for moderate usage
- Compare to: GPU electricity (~$50-100/month)

## Troubleshooting

### "AccessDeniedException"
**Fix**: Check AWS credentials and IAM permissions
```bash
# Test AWS credentials
aws sts get-caller-identity

# Ensure you have bedrock:InvokeAgent permission
```

### "ResourceNotFoundException"
**Fix**: Verify Agent ID and Alias ID
```bash
# List your agents
aws bedrock-agent list-agents --region us-west-2
```

### Want to use Ollama?
**Fix**: Set `LLM_PROVIDER=ollama` and uncomment Ollama service in docker-compose.yml

## Files Updated

1. **`code/server.py`** - Default changed to `bedrock`
2. **`docker-compose.yml`** - Ollama service commented out, Bedrock env vars added
3. **`.env.example`** - Bedrock configuration as default

## Documentation

- **Quick Start**: `code/BEDROCK_QUICKSTART.md`
- **Full Guide**: `code/BEDROCK_INTEGRATION.md`
- **Docker Explained**: `code/DOCKER_AND_BEDROCK.md`
- **Changes Summary**: `code/BEDROCK_CHANGES.md`

## Need Help?

1. **Setup Bedrock**: See `code/BEDROCK_QUICKSTART.md`
2. **Switch to Ollama**: See section above
3. **Understand costs**: See `code/BEDROCK_INTEGRATION.md`
4. **Docker questions**: See `code/DOCKER_AND_BEDROCK.md`

---

**Note**: You can always switch between providers by changing the `LLM_PROVIDER` environment variable. No code changes needed!
