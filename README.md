# RealtimeVoiceChat

Realtime Voice Chat app with Python FastAPI backend and modern frontend options.

## Frontend Options

### Alpine.js + Tailwind (Recommended - Lightweight)
- **Location:** `code/static-alpine/`
- **Tech Stack:** Alpine.js, Tailwind CSS, Vite
- **Size:** Minimal bundle size (~50KB)
- **Setup:**
  ```bash
  cd code/static-alpine
  npm install
  npm run build
  ```

### React + Tailwind (Alternative)
- **Location:** `code/static-react/`
- **Tech Stack:** React, Tailwind CSS, Vite, Framer Motion
- **Setup:**
  ```bash
  cd code/static-react
  npm install
  npm run build
  ```

## Quick Start

1. **Build the frontend:**
   ```bash
   cd code/static-alpine
   npm install
   npm run build
   ```

2. **Start the backend:**
   ```bash
   cd code
   python server.py
   ```

3. **Open in browser:**
   ```
   http://localhost:8000
   ```

## Development

For frontend development with hot reload:
```bash
cd code/static-alpine
npm run dev
```

Then access the dev server at `http://localhost:3000`