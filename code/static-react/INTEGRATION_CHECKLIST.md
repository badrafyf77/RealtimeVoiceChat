# Frontend Integration Checklist

## ✅ What's Already Done

### 1. React Application Structure
- ✅ All components created (VideoPanel, TranscriptPanel, StatusBar, etc.)
- ✅ Custom hooks for WebSocket, Webcam, and Audio
- ✅ Main App component orchestrating everything
- ✅ TailwindCSS configuration
- ✅ Vite build configuration

### 2. Backend Integration Points
- ✅ WebSocket connection to `/ws` endpoint
- ✅ Audio worklet paths point to `/static/pcmWorkletProcessor.js`
- ✅ TTS worklet paths point to `/static/ttsPlaybackProcessor.js`
- ✅ Message protocol matches backend (partial/final user/assistant)
- ✅ Binary audio format (8-byte header + PCM data)
- ✅ TTS chunk handling (base64 decode)

### 3. Files in Place
- ✅ `code/static/pcmWorkletProcessor.js` exists
- ✅ `code/static/ttsPlaybackProcessor.js` exists
- ✅ `code/static/index-new.html` created (ready to replace old one)
- ✅ React source code in `code/static-react/src/`

## ❌ What's Missing

### 1. Dockerfile Update
- ❌ Dockerfile doesn't include Node.js build stage
- ❌ React app won't be built automatically during `docker compose build`

### 2. HTML Replacement
- ❌ `code/static/index.html` still points to old vanilla JS
- ❌ Needs to be replaced with `index-new.html` content

## 🔧 What Needs to Be Done

### Step 1: Update Dockerfile
Add a Node.js build stage to automatically build the React app.

### Step 2: Update index.html
Replace the old HTML with the new one that loads the React app.

### Step 3: Test
After Docker build, verify:
1. React app loads at `localhost:8000`
2. Camera permission works
3. Microphone permission works
4. WebSocket connects
5. Audio streaming works
6. Transcription appears
7. TTS playback works

## 🎯 Integration Flow

```
Docker Build Process:
1. Node.js stage builds React app
   - npm install
   - npm run build
   - Outputs: code/static/app.js, code/static/app.css

2. Python stage copies everything
   - Copies built React files
   - Copies audio worklet files
   - Copies updated index.html

3. Container runs
   - FastAPI serves code/static/
   - index.html loads app.js (React)
   - React app connects to /ws
   - Audio worklets load from /static/

User Opens Browser:
1. Loads index.html
2. Loads app.js (React bundle)
3. Loads app.css (TailwindCSS)
4. React renders UI
5. User clicks "Start Interview"
6. Requests camera/mic permissions
7. Connects WebSocket
8. Starts audio streaming
9. Everything works! 🎉
```

## 🔍 Verification Points

After deployment, check:

### Browser Console
- [ ] No 404 errors for app.js or app.css
- [ ] No errors loading audio worklets
- [ ] WebSocket connects successfully
- [ ] No React errors

### Network Tab
- [ ] app.js loads (~200KB)
- [ ] app.css loads (~15KB)
- [ ] WebSocket connection established
- [ ] Binary audio packets being sent
- [ ] JSON messages being received

### Functionality
- [ ] Camera feed appears
- [ ] Microphone captures audio
- [ ] Speech is transcribed
- [ ] AI responds
- [ ] TTS audio plays
- [ ] Transcript updates in real-time

## 🚨 Common Issues & Solutions

### Issue: React app doesn't load
**Solution**: Check if app.js exists in code/static/ and index.html references it correctly

### Issue: Audio worklets fail to load
**Solution**: Verify paths are `/static/pcmWorkletProcessor.js` (with leading slash)

### Issue: WebSocket connection fails
**Solution**: Check backend is running and /ws endpoint is accessible

### Issue: Camera permission denied
**Solution**: Browser needs HTTPS or localhost, check browser settings

### Issue: No audio playback
**Solution**: Check AudioContext is not blocked by autoplay policy

## 📝 Next Steps

1. I'll update the Dockerfile to include Node.js build stage
2. I'll update the index.html automatically during build
3. You run your normal Docker workflow
4. Everything should work!
