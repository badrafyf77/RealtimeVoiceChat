import Alpine from 'alpinejs';
import './style.css';
import { createWebSocketManager } from './websocket';
import { createAudioCapture } from './audioCapture';
import { createWebcamManager } from './webcam';

window.Alpine = Alpine;

// Main app component
Alpine.data('voiceChat', () => ({
  // State
  isConnected: false,
  isRecording: false,
  isTTSPlaying: false,
  messages: [],
  webcamStream: null,
  webcamError: null,
  
  // Managers
  ws: null,
  audioCapture: null,
  webcam: null,

  init() {
    // Initialize managers
    this.ws = createWebSocketManager({
      onConnect: () => { this.isConnected = true; },
      onDisconnect: () => { this.isConnected = false; },
      onMessage: (msg) => this.handleMessage(msg),
      onTTSStateChange: (playing) => { this.isTTSPlaying = playing; }
    });

    this.audioCapture = createAudioCapture((data) => this.ws.sendAudio(data));
    this.webcam = createWebcamManager({
      onStream: (stream) => { 
        this.webcamStream = stream;
        this.$refs.video.srcObject = stream;
      },
      onError: (error) => { this.webcamError = error; }
    });
  },

  async handleStart() {
    try {
      await this.ws.connect();
      await this.webcam.start();
      await this.audioCapture.start();
      this.isRecording = true;
    } catch (error) {
      console.error('Failed to start:', error);
    }
  },

  handleStop() {
    this.ws.disconnect();
    this.webcam.stop();
    this.audioCapture.stop();
    this.isRecording = false;
  },

  handleReset() {
    this.messages = [];
    this.ws.clearHistory();
  },

  handleMessage(message) {
    const { type, content } = message;

    switch (type) {
      case 'partial_user_request':
        this.updateMessage('user', 'partial', content);
        break;
      case 'final_user_request':
        this.updateMessage('user', 'final', content);
        break;
      case 'partial_assistant_answer':
        this.updateMessage('assistant', 'partial', content);
        break;
      case 'final_assistant_answer':
        this.updateMessage('assistant', 'final', content);
        break;
    }
  },

  updateMessage(role, msgType, content) {
    if (!content?.trim()) {
      this.messages = this.messages.filter(m => !(m.type === 'partial' && m.role === role));
      this.scrollToBottom();
      return;
    }

    const filtered = this.messages.filter(m => !(m.type === 'partial' && m.role === role));
    
    if (msgType === 'partial') {
      this.messages = [...filtered, {
        id: `partial-${role}`,
        role,
        content,
        type: 'partial',
        timestamp: Date.now()
      }];
    } else {
      this.messages = [...filtered, {
        id: `final-${role}-${Date.now()}`,
        role,
        content,
        type: 'final',
        timestamp: Date.now()
      }];
    }

    // Always scroll to bottom when message updates
    this.scrollToBottom();
  },

  scrollToBottom() {
    // Use both nextTick and setTimeout to ensure scroll happens after DOM update
    this.$nextTick(() => {
      setTimeout(() => {
        const container = this.$refs.transcript;
        if (container) {
          container.scrollTop = container.scrollHeight;
        }
      }, 10);
    });
  },

  getMessageClass(message) {
    const base = 'px-4 py-3 rounded-lg max-w-[85%] break-words text-sm';
    const opacity = message.type === 'partial' ? 'opacity-60' : '';
    const color = message.role === 'user' 
      ? 'bg-blue-600 text-white ml-auto' 
      : 'bg-zinc-100 dark:bg-zinc-700 text-zinc-900 dark:text-zinc-100';
    return `${base} ${color} ${opacity}`;
  }
}));

// Render the app
document.getElementById('app').innerHTML = `
  <div x-data="voiceChat" class="flex flex-col min-h-screen bg-zinc-50 dark:bg-zinc-900">
    <!-- Header -->
    <header class="sticky top-0 z-40 bg-white dark:bg-zinc-800 border-b border-zinc-200 dark:border-zinc-700">
      <div class="px-5 sm:px-8 py-4">
        <div class="flex items-center justify-between">
          <div class="flex items-center gap-3">
            <h1 class="text-xl font-semibold text-zinc-900 dark:text-white">Voice Chat</h1>
            <div class="flex items-center gap-2">
              <div class="w-2 h-2 rounded-full" :class="isConnected ? 'bg-green-500' : 'bg-zinc-400'"></div>
              <span class="text-sm text-zinc-600 dark:text-zinc-400" x-text="isConnected ? 'Connected' : 'Disconnected'"></span>
            </div>
          </div>
          
          <div class="flex items-center gap-3">
            <button 
              @click="handleReset()"
              :disabled="!isConnected"
              class="px-4 py-2 text-sm font-medium text-zinc-700 dark:text-zinc-300 bg-white dark:bg-zinc-700 border border-zinc-300 dark:border-zinc-600 rounded-lg hover:bg-zinc-50 dark:hover:bg-zinc-600 disabled:opacity-50 disabled:cursor-not-allowed transition-colors"
            >
              Reset
            </button>
            
            <button 
              x-show="!isRecording"
              @click="handleStart()"
              class="px-6 py-2 text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-lg transition-colors"
            >
              Start Session
            </button>
            
            <button 
              x-show="isRecording"
              @click="handleStop()"
              class="px-6 py-2 text-sm font-medium text-white bg-red-600 hover:bg-red-700 rounded-lg transition-colors"
            >
              End Session
            </button>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <main class="flex-1 flex overflow-hidden">
      <div class="flex-1 flex flex-col lg:flex-row h-full">
        <!-- Video Panel - Fixed, no scroll -->
        <div class="flex-1 p-5 sm:p-8 flex items-center justify-center overflow-hidden">
          <div class="relative w-full aspect-video max-w-5xl bg-zinc-900 rounded-xl overflow-hidden border border-zinc-200 dark:border-zinc-700 shadow-lg">
            <video 
              x-ref="video" 
              autoplay 
              playsinline 
              muted
              class="w-full h-full object-cover"
            ></video>
            
            <!-- Recording Indicator -->
            <div x-show="isRecording" class="absolute top-4 left-4 flex items-center gap-2 bg-red-500/90 backdrop-blur-sm px-3 py-2 rounded-lg">
              <div class="relative">
                <div class="w-2.5 h-2.5 bg-white rounded-full"></div>
                <div class="absolute inset-0 w-2.5 h-2.5 bg-white rounded-full pulse-ring"></div>
              </div>
              <span class="text-white text-sm font-medium">Recording</span>
            </div>

            <!-- TTS Playing Indicator -->
            <div x-show="isTTSPlaying" class="absolute top-4 right-4 bg-blue-500/90 backdrop-blur-sm px-3 py-2 rounded-lg">
              <span class="text-white text-sm font-medium">🔊 AI Speaking</span>
            </div>
          </div>
        </div>

        <!-- Transcript Panel - Scrollable independently -->
        <div class="w-full lg:w-96 bg-white dark:bg-zinc-800 border-t lg:border-t-0 lg:border-l border-zinc-200 dark:border-zinc-700 flex flex-col">
          <div class="px-5 py-4 border-b border-zinc-200 dark:border-zinc-700 flex-shrink-0">
            <h2 class="text-lg font-semibold text-zinc-900 dark:text-white">Conversation</h2>
            <p class="text-sm text-zinc-600 dark:text-zinc-400 mt-1">Real-time transcript</p>
          </div>
          
          <div x-ref="transcript" class="flex-1 overflow-y-auto p-5 space-y-3 scrollbar-hidden">
            <template x-for="message in messages" :key="message.id">
              <div class="flex" :class="message.role === 'user' ? 'justify-end' : 'justify-start'">
                <div :class="getMessageClass(message)" x-text="message.content"></div>
              </div>
            </template>
            
            <div x-show="messages.length === 0" class="flex flex-col items-center justify-center h-full text-center">
              <svg class="w-12 h-12 text-zinc-300 dark:text-zinc-600 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
              </svg>
              <p class="text-zinc-500 dark:text-zinc-400">Start recording to begin</p>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
`;

Alpine.start();
