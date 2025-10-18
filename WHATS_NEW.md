# 🎉 What's New: Bedrock is Now Default!

## TL;DR

**Bedrock Agent is now the default LLM provider** (was Ollama)

- ✅ Smaller deployment (no Ollama container)
- ✅ Managed LLM service
- ✅ Better for production
- ⚠️ Requires AWS credentials

**Want to keep using Ollama?** Just set `LLM_PROVIDER=ollama` - everything still works!

---

## Changes Made

### 1. Default LLM Provider Changed
```python
# code/server.py (line ~38)
LLM_START_PROVIDER = os.getenv("LLM_PROVIDER", "bedrock")  # Was: "ollama"
```

### 2. Docker Compose Updated
- Ollama service is now commented out
- Bedrock environment variables added
- AWS credentials support added

### 3. New Files Created

| File | Purpose |
|------|---------|
| `code/bedrock_agent_llm.py` | Bedrock LLM integration |
| `docker-compose.bedrock.yml` | Explicit Bedrock setup |
| `docker-compose.ollama.yml` | Ollama setup (for those who want it) |
| `.env.example` | Configuration template (Bedrock default) |
| `README_BEDROCK_DEFAULT.md` | Explains the change |
| `MIGRATION_TO_BEDROCK.md` | Migration guide |
| `code/BEDROCK_QUICKSTART.md` | 5-minute setup |
| `code/BEDROCK_INTEGRATION.md` | Full documentation |
| `code/DOCKER_AND_BEDROCK.md` | Docker size explained |

---

## Quick Start

### New Users (Bedrock)

```bash
# 1. Configure
cp .env.example .env
# Edit .env with AWS credentials

# 2. Run
docker-compose up -d

# 3. Open
open http://localhost:8000
```

### Existing Users (Keep Ollama)

```bash
# Option 1: Environment variable
export LLM_PROVIDER=ollama
docker-compose up -d

# Option 2: Use Ollama compose file
docker-compose -f docker-compose.ollama.yml up -d

# Option 3: Edit docker-compose.yml
# Uncomment the ollama service
```

---

## Why Bedrock Default?

### Benefits
1. **Smaller deployment**: 5GB vs 7-10GB (no Ollama container)
2. **Production-ready**: Managed service, AWS SLA
3. **Better scaling**: No local GPU needed for LLM
4. **Cost-effective**: Pay per token vs 24/7 GPU
5. **Easier setup**: No model downloads

### Trade-offs
1. **Requires AWS**: Need account and credentials
2. **Internet needed**: Can't work offline
3. **AWS costs**: ~$5-60/month depending on usage
4. **Slight latency**: Network call vs local (still fast)

---

## Comparison

| Feature | Ollama (Before) | Bedrock (Now) |
|---------|-----------------|---------------|
| **Default** | ✅ Yes | ✅ Yes |
| **Docker Size** | 7-10GB | 5GB |
| **Setup** | Download models | AWS credentials |
| **Cost** | GPU electricity | Pay per token |
| **Offline** | ✅ Yes | ❌ No |
| **Scaling** | Add GPUs | Automatic |
| **Latency** | Very low | Low |

---

## Configuration

### Bedrock (Default)
```bash
# .env
LLM_PROVIDER=bedrock
BEDROCK_AGENT_ID=your_agent_id
BEDROCK_AGENT_ALIAS_ID=your_alias_id
AWS_ACCESS_KEY_ID=your_key
AWS_SECRET_ACCESS_KEY=your_secret
```

### Ollama (Optional)
```bash
# .env
LLM_PROVIDER=ollama
LLM_MODEL=llama3.2:latest
```

### OpenAI (Optional)
```bash
# .env
LLM_PROVIDER=openai
LLM_MODEL=gpt-4
OPENAI_API_KEY=your_key
```

---

## Docker Compose Files

We now provide **three** compose files:

### 1. `docker-compose.yml` (Default - Bedrock)
```bash
docker-compose up -d
```
- Uses Bedrock by default
- Ollama service commented out
- Requires AWS credentials

### 2. `docker-compose.ollama.yml` (Ollama)
```bash
docker-compose -f docker-compose.ollama.yml up -d
```
- Uses Ollama
- Includes Ollama service
- No AWS needed

### 3. `docker-compose.bedrock.yml` (Explicit Bedrock)
```bash
docker-compose -f docker-compose.bedrock.yml up -d
```
- Same as default
- More explicit about Bedrock
- Good for documentation

---

## Migration Path

### From Ollama to Bedrock
1. Get AWS credentials
2. Create Bedrock Agent
3. Update `.env` with credentials
4. Run: `docker-compose up -d`

See [`MIGRATION_TO_BEDROCK.md`](MIGRATION_TO_BEDROCK.md) for details.

### Keep Using Ollama
1. Set `LLM_PROVIDER=ollama`
2. Use `docker-compose.ollama.yml`
3. Done!

---

## Documentation

### Getting Started
- 🚀 **Quick Start**: [`README.md`](README.md)
- 🎯 **Bedrock Setup**: [`code/BEDROCK_QUICKSTART.md`](code/BEDROCK_QUICKSTART.md)
- 🔄 **Migration**: [`MIGRATION_TO_BEDROCK.md`](MIGRATION_TO_BEDROCK.md)

### Deep Dive
- 📚 **Full Integration**: [`code/BEDROCK_INTEGRATION.md`](code/BEDROCK_INTEGRATION.md)
- 🐳 **Docker Explained**: [`code/DOCKER_AND_BEDROCK.md`](code/DOCKER_AND_BEDROCK.md)
- 🔧 **Changes Summary**: [`code/BEDROCK_CHANGES.md`](code/BEDROCK_CHANGES.md)

---

## FAQ

### Q: Do I have to use Bedrock?
**A**: No! Set `LLM_PROVIDER=ollama` to keep using Ollama.

### Q: Will my existing setup break?
**A**: No. If you have `LLM_PROVIDER=ollama` set, it continues working.

### Q: Why change the default?
**A**: Bedrock is better for production: smaller, managed, scalable.

### Q: Can I switch back?
**A**: Yes! Just change `LLM_PROVIDER` environment variable.

### Q: What if I don't have AWS?
**A**: Use Ollama: `docker-compose -f docker-compose.ollama.yml up -d`

### Q: Is this a breaking change?
**A**: No. Existing users with `LLM_PROVIDER=ollama` are unaffected.

### Q: Do I need to rebuild?
**A**: No. Just change environment variables and restart.

---

## Support

### Need Help?
1. **Bedrock Setup**: See [`code/BEDROCK_QUICKSTART.md`](code/BEDROCK_QUICKSTART.md)
2. **Keep Ollama**: See [`MIGRATION_TO_BEDROCK.md`](MIGRATION_TO_BEDROCK.md)
3. **Docker Questions**: See [`code/DOCKER_AND_BEDROCK.md`](code/DOCKER_AND_BEDROCK.md)

### Issues?
- Check logs: `docker-compose logs app`
- Verify config: `docker-compose config`
- Test provider: See documentation

---

## Summary

✅ **Bedrock is now default** - better for production
✅ **Ollama still works** - just set `LLM_PROVIDER=ollama`
✅ **No breaking changes** - existing setups continue working
✅ **Easy to switch** - change one environment variable
✅ **Well documented** - multiple guides available

**Bottom line**: Use Bedrock for production, Ollama for development, or switch anytime!
