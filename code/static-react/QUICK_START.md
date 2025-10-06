# Quick Start - AI Interview Platform

## 🚀 Get Started in 3 Steps

### 1. Install Dependencies

```bash
cd code/static-react
npm install
```

### 2. Build the Frontend

```bash
npm run build
```

### 3. Update index.html

```bash
# Backup old version
cp ../static/index.html ../static/index-old.html

# Deploy new version
cp ../static/index-new.html ../static/index.html
```

## ✅ Done!

Start your backend and open `http://localhost:8000`

---

## 📋 Common Commands

```bash
# Development mode (with hot reload)
npm run dev

# Build for production
npm run build

# Preview production build
npm run preview
```

## 🎨 Quick Customization

### Change Names

Edit `src/App.jsx`:
```javascript
const [candidateName] = useState('Your Name');
const [interviewTitle] = useState('Your Interview');
```

### Change Colors

Edit `tailwind.config.js`:
```javascript
colors: {
  'user-message': '#3B82F6',  // Blue
  'ai-message': '#F3F4F6',    // Gray
}
```

## 🐛 Troubleshooting

| Problem | Solution |
|---------|----------|
| Build fails | `rm -rf node_modules && npm install` |
| Camera not working | Check browser permissions |
| WebSocket error | Verify backend is running on port 8000 |
| Audio not playing | Check AudioWorklet files in `/static/` |

## 🔄 Revert to Old Interface

```bash
cp code/static/index-old.html code/static/index.html
```

## 📚 More Info

- Full setup guide: `SETUP.md`
- Migration details: `../FRONTEND_MIGRATION.md`
- Component docs: `README.md`

---

**Need help?** Check the browser console for errors!
