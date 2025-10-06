# Setup Guide - AI Interview Platform Frontend

This guide will help you set up and build the new React-based frontend for the AI Interview Platform.

## Prerequisites

- Node.js 16+ and npm installed
- The existing Python backend should be running on port 8000

## Step-by-Step Setup

### 1. Navigate to the React Project

```bash
cd code/static-react
```

### 2. Install Dependencies

```bash
npm install
```

This will install:
- React 18
- TailwindCSS 3
- Framer Motion
- Vite
- All necessary dev dependencies

### 3. Development Mode (Optional)

To run the frontend in development mode with hot reload:

```bash
npm run dev
```

This starts a development server at `http://localhost:3000` with:
- Hot Module Replacement (HMR)
- Fast refresh
- Proxy to backend WebSocket at `ws://localhost:8000/ws`

**Note:** Make sure your Python backend is running on port 8000 before starting dev mode.

### 4. Build for Production

To build the React app and deploy it to replace the old frontend:

```bash
npm run build
```

This command:
1. Builds the React app with Vite
2. Outputs `app.js` and `app.css` to `../static/` directory
3. Replaces the old vanilla JS frontend

### 5. Update index.html

After building, you need to update the main HTML file to use the new React build:

```bash
# Backup the old index.html
cp ../static/index.html ../static/index-old.html

# Replace with the new one
cp ../static/index-new.html ../static/index.html
```

Or manually edit `code/static/index.html` to match this structure:

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AI Interview Platform</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="app.css">
</head>
<body>
  <div id="root"></div>
  <script type="module" src="app.js"></script>
</body>
</html>
```

### 6. Start the Backend

Make sure your Python backend is running:

```bash
# From the project root
cd code
python server.py
```

Or if using Docker:

```bash
docker compose up
```

### 7. Access the Application

Open your browser and navigate to:

```
http://localhost:8000
```

You should now see the new AI Interview Platform interface!

## Troubleshooting

### Build Errors

If you encounter build errors:

1. **Clear node_modules and reinstall:**
   ```bash
   rm -rf node_modules package-lock.json
   npm install
   ```

2. **Check Node version:**
   ```bash
   node --version  # Should be 16+
   ```

### Camera/Microphone Not Working

1. **Check browser permissions** - Allow camera and microphone access
2. **Use HTTPS or localhost** - WebRTC requires secure context
3. **Check if devices are in use** - Close other apps using camera/mic

### WebSocket Connection Failed

1. **Verify backend is running** on port 8000
2. **Check firewall settings**
3. **Look at browser console** for specific error messages

### Audio Worklet Errors

Make sure the audio worklet files exist in `code/static/`:
- `pcmWorkletProcessor.js`
- `ttsPlaybackProcessor.js`

These files should already be there from the original project.

## File Structure After Build

```
code/
├── static/
│   ├── index.html          # Updated to load React app
│   ├── app.js              # Built React application
│   ├── app.css             # Built styles (TailwindCSS)
│   ├── pcmWorkletProcessor.js      # Audio capture worklet
│   ├── ttsPlaybackProcessor.js     # TTS playback worklet
│   └── index-old.html      # Backup of old interface
└── static-react/
    ├── src/                # React source code
    ├── package.json
    ├── vite.config.js
    └── tailwind.config.js
```

## Development Workflow

### Making Changes

1. Edit files in `code/static-react/src/`
2. If in dev mode (`npm run dev`), changes appear instantly
3. If not, run `npm run build` to rebuild

### Testing

1. **Development:** Use `npm run dev` for fast iteration
2. **Production:** Build with `npm run build` and test with actual backend

### Customization

- **Colors:** Edit `tailwind.config.js`
- **Components:** Modify files in `src/components/`
- **Hooks:** Update logic in `src/hooks/`
- **Names:** Change candidate/AI names in `App.jsx`

## Quick Commands Reference

```bash
# Install dependencies
npm install

# Development mode
npm run dev

# Build for production
npm run build

# Preview production build
npm run preview
```

## Next Steps

After successful setup:

1. ✅ Test camera and microphone permissions
2. ✅ Start an interview session
3. ✅ Verify real-time transcription works
4. ✅ Check TTS audio playback
5. ✅ Test the stop/reset functionality

## Support

If you encounter issues:

1. Check the browser console for errors
2. Verify all prerequisites are met
3. Ensure backend is running and accessible
4. Review the main README.md for backend setup

## Reverting to Old Interface

If you need to revert to the old vanilla JS interface:

```bash
cd code/static
cp index-old.html index.html
```

Then restart the backend server.
