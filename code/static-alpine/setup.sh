#!/bin/bash

# Setup script for Alpine.js frontend

echo "🚀 Setting up Alpine.js Voice Chat Frontend..."
echo ""

# Check if Node.js is installed
if ! command -v node &> /dev/null; then
    echo "❌ Node.js is not installed. Please install Node.js 18+ first."
    exit 1
fi

echo "✅ Node.js version: $(node --version)"
echo ""

# Install dependencies
echo "📦 Installing dependencies..."
npm install

if [ $? -ne 0 ]; then
    echo "❌ Failed to install dependencies"
    exit 1
fi

echo ""
echo "🔨 Building production bundle..."
npm run build

if [ $? -ne 0 ]; then
    echo "❌ Build failed"
    exit 1
fi

echo ""
echo "✅ Setup complete!"
echo ""
echo "📝 Next steps:"
echo "   1. Start the backend server:"
echo "      cd ../code"
echo "      python server.py"
echo ""
echo "   2. Open your browser to:"
echo "      http://localhost:8000"
echo ""
echo "💡 For development with hot reload:"
echo "   npm run dev"
echo "   Then open: http://localhost:3000"
