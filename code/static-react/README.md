# AI Interview Platform - React Frontend

Modern React-based frontend for the AI Interview Platform with video call-style interface.

## Features

- 🎥 Live webcam video feed with candidate overlay
- 🤖 AI interviewer avatar with speaking indicator
- 💬 Real-time transcript panel with message bubbles
- 🎙️ Audio capture and streaming to backend
- 🔊 TTS audio playback from AI responses
- ⚡ Low-latency WebSocket communication
- 🎨 Modern UI with TailwindCSS and Framer Motion animations

## Tech Stack

- **React 18** - UI framework
- **TailwindCSS** - Styling
- **Framer Motion** - Animations
- **Vite** - Build tool
- **Web Audio API** - Audio processing
- **WebRTC** - Webcam access

## Development

### Install Dependencies

```bash
npm install
```

### Run Development Server

```bash
npm run dev
```

This starts Vite dev server at `http://localhost:3000` with hot module replacement.

### Build for Production

```bash
npm run build
```

This builds the app and outputs to `../static/` directory, replacing the old vanilla JS frontend.

## Project Structure

```
src/
├── components/
│   ├── VideoPanel.jsx       # Webcam video display
│   ├── AIAvatar.jsx          # AI interviewer avatar
│   ├── TranscriptPanel.jsx   # Message list container
│   ├── MessageBubble.jsx     # Individual message component
│   └── StatusBar.jsx         # Bottom status bar with controls
├── hooks/
│   ├── useWebSocket.js       # WebSocket connection management
│   ├── useWebcam.js          # Webcam access and control
│   └── useAudioCapture.js    # Microphone audio capture
├── App.jsx                   # Main application component
├── main.jsx                  # React entry point
└── index.css                 # Global styles and Tailwind imports
```

## Integration with Backend

The frontend integrates with the existing Python/FastAPI backend:

- **WebSocket**: Connects to `/ws` endpoint for bidirectional communication
- **Audio Worklets**: Uses existing `pcmWorkletProcessor.js` and `ttsPlaybackProcessor.js` from `/static/`
- **Message Protocol**: Compatible with existing JSON message types and binary audio format

## Message Types

### Incoming (from server)
- `partial_user_request` - Real-time user speech transcription
- `final_user_request` - Complete user utterance
- `partial_assistant_answer` - AI response being generated
- `final_assistant_answer` - Complete AI response
- `tts_chunk` - Audio data for playback (base64)
- `tts_interruption` / `stop_tts` - Stop audio playback

### Outgoing (to server)
- `tts_start` / `tts_stop` - TTS playback state
- `clear_history` - Clear conversation
- `set_speed` - Adjust turn detection speed
- Binary audio packets (8-byte header + PCM data)

## Customization

### Change Candidate Name
Edit `App.jsx`:
```javascript
const [candidateName, setCandidateName] = useState('Your Name');
```

### Change Interview Title
Edit `App.jsx`:
```javascript
const [interviewTitle, setInterviewTitle] = useState('Your Interview Title');
```

### Change AI Avatar Name
Edit `MessageBubble.jsx` and `AIAvatar.jsx`:
```javascript
{isAI ? 'Your AI Name' : 'Candidate Name'}
```

### Styling
All styles use TailwindCSS utility classes. Customize colors in `tailwind.config.js`:
```javascript
colors: {
  'interview-dark': '#1F2937',
  'ai-message': '#F3F4F6',
  'user-message': '#3B82F6',
}
```

## Browser Compatibility

- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+

Requires support for:
- WebRTC getUserMedia
- Web Audio API with AudioWorklet
- WebSocket
- ES6+ JavaScript

## Troubleshooting

### Camera/Microphone Not Working
- Check browser permissions
- Ensure HTTPS (or localhost for development)
- Verify no other app is using the devices

### WebSocket Connection Failed
- Ensure backend server is running on port 8000
- Check CORS configuration
- Verify WebSocket endpoint `/ws` is accessible

### Audio Issues
- Check that AudioWorklet files are in `/static/` directory
- Verify audio context is not blocked by browser autoplay policy
- Check browser console for errors

## License

MIT
