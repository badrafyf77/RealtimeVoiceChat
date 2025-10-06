# Architecture Overview

## System Architecture

```
┌─────────────────────────────────────────────────────────────────┐
│                         Browser Client                           │
│                                                                   │
│  ┌────────────────────────────────────────────────────────────┐ │
│  │                    React Application                        │ │
│  │                                                             │ │
│  │  ┌──────────────┐  ┌──────────────┐  ┌─────────────────┐ │ │
│  │  │  VideoPanel  │  │ Transcript   │  │   StatusBar     │ │ │
│  │  │              │  │   Panel      │  │                 │ │ │
│  │  │  - Webcam    │  │              │  │  - Controls     │ │ │
│  │  │  - AI Avatar │  │  - Messages  │  │  - Time/Title   │ │ │
│  │  └──────────────┘  └──────────────┘  └─────────────────┘ │ │
│  │                                                             │ │
│  │  ┌──────────────────────────────────────────────────────┐ │ │
│  │  │              Custom Hooks Layer                       │ │ │
│  │  │                                                        │ │ │
│  │  │  useWebSocket  │  useWebcam  │  useAudioCapture     │ │ │
│  │  └──────────────────────────────────────────────────────┘ │ │
│  └─────────────────────────────────────────────────────────── │ │
│                                                                   │
│  ┌────────────────────────────────────────────────────────────┐ │
│  │              Web APIs & Browser Features                   │ │
│  │                                                             │ │
│  │  WebSocket API  │  WebRTC  │  Web Audio API  │  AudioWorklet│ │
│  └────────────────────────────────────────────────────────────┘ │
└─────────────────────────────────────────────────────────────────┘
                              │
                    WebSocket Connection
                              │
┌─────────────────────────────────────────────────────────────────┐
│                      Python Backend (FastAPI)                    │
│                                                                   │
│  ┌────────────────────────────────────────────────────────────┐ │
│  │                  WebSocket Handler                          │ │
│  └────────────────────────────────────────────────────────────┘ │
│                              │                                    │
│  ┌────────────────────────────────────────────────────────────┐ │
│  │              SpeechPipelineManager                          │ │
│  │                                                             │ │
│  │  ┌──────────────┐  ┌──────────────┐  ┌─────────────────┐ │ │
│  │  │ STT Worker   │  │  LLM Worker  │  │   TTS Worker    │ │ │
│  │  │ (Whisper)    │  │  (Ollama)    │  │   (Kokoro)      │ │ │
│  │  └──────────────┘  └──────────────┘  └─────────────────┘ │ │
│  └────────────────────────────────────────────────────────────┘ │
│                                                                   │
│  ┌────────────────────────────────────────────────────────────┐ │
│  │              AudioInputProcessor                            │ │
│  │  - Resampling  - Turn Detection  - Interruption Handling   │ │
│  └────────────────────────────────────────────────────────────┘ │
└─────────────────────────────────────────────────────────────────┘
```

## Data Flow

### 1. Audio Capture Flow

```
User Speaks
    ↓
Microphone (getUserMedia)
    ↓
AudioContext (48kHz)
    ↓
pcmWorkletProcessor.js
    ↓
Batch into 2048 samples
    ↓
Add 8-byte header (timestamp + flags)
    ↓
WebSocket.send(ArrayBuffer)
    ↓
Backend receives binary data
    ↓
Resample to 16kHz
    ↓
Feed to Whisper STT
```

### 2. Transcription Flow

```
Backend STT Processing
    ↓
Partial transcription available
    ↓
WebSocket.send({ type: 'partial_user_request', content: '...' })
    ↓
React useWebSocket hook receives
    ↓
Update messages state
    ↓
TranscriptPanel re-renders
    ↓
MessageBubble animates in
    ↓
Auto-scroll to bottom
```

### 3. LLM Response Flow

```
Final user transcription
    ↓
Send to LLM (Ollama/OpenAI)
    ↓
Stream tokens as they generate
    ↓
Partial assistant answer
    ↓
WebSocket.send({ type: 'partial_assistant_answer', content: '...' })
    ↓
React updates UI
    ↓
Final answer complete
    ↓
WebSocket.send({ type: 'final_assistant_answer', content: '...' })
```

### 4. TTS Playback Flow

```
LLM generates text
    ↓
TTS engine synthesizes audio
    ↓
Audio chunks (PCM 24kHz)
    ↓
Base64 encode
    ↓
WebSocket.send({ type: 'tts_chunk', content: 'base64...' })
    ↓
React receives and decodes
    ↓
Convert to Int16Array
    ↓
Send to ttsPlaybackProcessor.js
    ↓
Queue for playback
    ↓
AudioContext plays through speakers
```

## Component Hierarchy

```
App
├── VideoPanel
│   ├── <video> element
│   ├── Candidate name overlay
│   │   └── Recording indicator
│   └── AIAvatar
│       ├── Avatar circle
│       ├── Pulsing ring (when active)
│       └── Name label
│
├── TranscriptPanel
│   ├── Header
│   │   ├── "Live Transcript" title
│   │   └── Close button
│   └── Messages container
│       └── MessageBubble (for each message)
│           ├── Speaker name
│           ├── Message content
│           ├── Typing indicator (if partial)
│           └── Timestamp (if final)
│
└── StatusBar
    ├── Left section
    │   ├── Current time
    │   └── Interview title
    ├── Center section
    │   ├── Start button
    │   ├── Stop button
    │   └── Reset button
    └── Right section
        ├── Connection status
        ├── Info button
        ├── Settings button
        └── Chat button
```

## State Management

### App-Level State

```javascript
App.jsx
├── candidateName: string
├── interviewTitle: string
└── isRecording: boolean
```

### Hook State

```javascript
useWebSocket
├── isConnected: boolean
├── messages: Message[]
├── socketRef: WebSocket
├── audioContextRef: AudioContext
└── ttsWorkletNodeRef: AudioWorkletNode

useWebcam
├── stream: MediaStream | null
├── isActive: boolean
└── error: Error | null

useAudioCapture
├── isCapturing: boolean
├── audioContextRef: AudioContext
├── micWorkletNodeRef: AudioWorkletNode
└── batchBufferRef: ArrayBuffer
```

### Component State

```javascript
VideoPanel
└── (no local state, uses props)

TranscriptPanel
├── autoScroll: boolean
└── isAtBottom: boolean

MessageBubble
└── (no local state, pure component)

StatusBar
└── currentTime: Date
```

## Message Protocol

### Incoming Messages (from backend)

```typescript
type IncomingMessage =
  | { type: 'partial_user_request'; content: string }
  | { type: 'final_user_request'; content: string }
  | { type: 'partial_assistant_answer'; content: string }
  | { type: 'final_assistant_answer'; content: string }
  | { type: 'tts_chunk'; content: string }  // base64
  | { type: 'tts_interruption' }
  | { type: 'stop_tts' }
```

### Outgoing Messages (to backend)

```typescript
type OutgoingMessage =
  | { type: 'tts_start' }
  | { type: 'tts_stop' }
  | { type: 'clear_history' }
  | { type: 'set_speed'; speed: number }
  | ArrayBuffer  // Binary audio data
```

### Binary Audio Format

```
Byte 0-3:  uint32 (big-endian) - timestamp_ms
Byte 4-7:  uint32 (big-endian) - flags (bit 0: isTTSPlaying)
Byte 8-n:  int16[] - PCM audio samples (2048 samples = 4096 bytes)

Total: 8 + 4096 = 4104 bytes per packet
```

## Lifecycle Events

### Application Startup

```
1. React renders App component
2. useWebSocket initializes (but doesn't connect)
3. useWebcam initializes (but doesn't start)
4. useAudioCapture initializes (but doesn't start)
5. UI renders in idle state
```

### Start Interview

```
1. User clicks "Start Interview"
2. App.handleStart() called
3. useWebSocket.connect()
   - Create WebSocket connection
   - Initialize AudioContext for TTS
   - Load ttsPlaybackProcessor.js
4. useWebcam.startWebcam()
   - Request camera permission
   - Get MediaStream
   - Attach to <video> element
5. useAudioCapture.startCapture()
   - Request microphone permission
   - Initialize AudioContext for capture
   - Load pcmWorkletProcessor.js
   - Start streaming audio
6. UI updates to recording state
```

### During Interview

```
Continuous loop:
1. User speaks → Audio captured → Sent to backend
2. Backend transcribes → Partial updates sent
3. User finishes → Final transcription sent
4. LLM generates → Partial responses sent
5. TTS synthesizes → Audio chunks sent
6. Audio plays → TTS state updates sent
7. Repeat
```

### Stop Interview

```
1. User clicks "Stop Interview"
2. App.handleStop() called
3. useWebSocket.disconnect()
   - Close WebSocket
   - Close AudioContext
   - Disconnect TTS worklet
4. useWebcam.stopWebcam()
   - Stop all video tracks
   - Release camera
5. useAudioCapture.stopCapture()
   - Flush remaining audio
   - Disconnect mic worklet
   - Stop all audio tracks
   - Close AudioContext
6. UI updates to idle state
```

## Performance Optimizations

### React Optimizations

```javascript
// Memoize components
const MessageBubble = React.memo(({ message }) => { ... });

// Memoize callbacks
const handleStart = useCallback(async () => { ... }, []);

// Efficient state updates
setMessages(prev => {
  const filtered = prev.filter(m => m.type !== 'partial');
  return [...filtered, newMessage];
});
```

### Audio Optimizations

```javascript
// Buffer pooling
const bufferPool = [];
const getBuffer = () => bufferPool.pop() || new ArrayBuffer(4104);
const returnBuffer = (buf) => bufferPool.push(buf);

// Batch audio samples
const BATCH_SIZE = 2048;  // Send every 2048 samples
```

### Network Optimizations

```javascript
// Binary protocol for audio (not JSON)
socket.send(arrayBuffer);  // Efficient

// Batch text messages if needed
const messageQueue = [];
const flushQueue = debounce(() => {
  socket.send(JSON.stringify(messageQueue));
  messageQueue.length = 0;
}, 100);
```

## Error Handling

### Camera Errors

```javascript
try {
  const stream = await navigator.mediaDevices.getUserMedia({ video: true });
} catch (error) {
  if (error.name === 'NotAllowedError') {
    // Permission denied
  } else if (error.name === 'NotFoundError') {
    // No camera device
  } else if (error.name === 'NotReadableError') {
    // Camera in use
  }
}
```

### WebSocket Errors

```javascript
socket.onerror = (error) => {
  console.error('WebSocket error:', error);
  setIsConnected(false);
  // Show error notification to user
};

socket.onclose = (event) => {
  if (!event.wasClean) {
    // Unexpected disconnect
    // Attempt reconnection with exponential backoff
  }
};
```

### Audio Errors

```javascript
try {
  await audioContext.audioWorklet.addModule('/static/processor.js');
} catch (error) {
  console.error('Failed to load audio worklet:', error);
  // Fallback to ScriptProcessorNode (deprecated but more compatible)
}
```

## Security Considerations

### Permissions

- Camera/microphone access requires user permission
- WebRTC requires secure context (HTTPS or localhost)
- Permissions can be revoked at any time

### Data Privacy

- Audio/video streams are not recorded by default
- Transcripts stored only in browser memory
- WebSocket connection can be encrypted (WSS)

### Content Security Policy

```html
<meta http-equiv="Content-Security-Policy" 
      content="default-src 'self'; 
               connect-src 'self' ws: wss:; 
               media-src 'self' blob:;">
```

## Browser Compatibility

### Required Features

| Feature | Chrome | Firefox | Safari | Edge |
|---------|--------|---------|--------|------|
| WebRTC getUserMedia | 53+ | 36+ | 11+ | 79+ |
| AudioWorklet | 66+ | 76+ | 14.1+ | 79+ |
| WebSocket | 43+ | 48+ | 10.1+ | 14+ |
| ES6 Modules | 61+ | 60+ | 11+ | 79+ |

### Polyfills

Not needed for modern browsers, but consider:
- `webrtc-adapter` for cross-browser WebRTC
- `audio-worklet-polyfill` for older browsers

## Deployment Considerations

### Build Output

```
code/static/
├── app.js          # ~150-200 KB (gzipped)
├── app.css         # ~10-15 KB (gzipped)
├── index.html      # ~1 KB
└── *.worklet.js    # ~5 KB each
```

### CDN Considerations

- Static assets can be served from CDN
- WebSocket must connect to backend origin
- CORS headers required for cross-origin requests

### Docker Integration

```dockerfile
# Build React app
FROM node:18 AS frontend-builder
WORKDIR /app/code/static-react
COPY code/static-react/package*.json ./
RUN npm ci
COPY code/static-react/ ./
RUN npm run build

# Copy to final image
FROM python:3.11
COPY --from=frontend-builder /app/code/static /app/code/static
```

---

This architecture provides a solid foundation for a professional AI interview platform with room for future enhancements.
