import { useState, useEffect, useRef, useCallback } from 'react';

function useWebSocket() {
  const [isConnected, setIsConnected] = useState(false);
  const [messages, setMessages] = useState([]);
  const socketRef = useRef(null);
  const audioContextRef = useRef(null);
  const ttsWorkletNodeRef = useRef(null);
  const [isTTSPlaying, setIsTTSPlaying] = useState(false);

  const connect = useCallback(async () => {
    if (socketRef.current?.readyState === WebSocket.OPEN) {
      console.log('Already connected');
      return;
    }

    // Initialize Audio Context for TTS playback
    if (!audioContextRef.current) {
      audioContextRef.current = new AudioContext({ sampleRate: 48000 });
      await audioContextRef.current.audioWorklet.addModule('/static/ttsPlaybackProcessor.js');

      ttsWorkletNodeRef.current = new AudioWorkletNode(
        audioContextRef.current,
        'tts-playback-processor'
      );

      ttsWorkletNodeRef.current.port.onmessage = (event) => {
        const { type } = event.data;
        if (type === 'ttsPlaybackStarted') {
          setIsTTSPlaying(true);
          if (socketRef.current?.readyState === WebSocket.OPEN) {
            socketRef.current.send(JSON.stringify({ type: 'tts_start' }));
          }
        } else if (type === 'ttsPlaybackStopped') {
          setIsTTSPlaying(false);
          if (socketRef.current?.readyState === WebSocket.OPEN) {
            socketRef.current.send(JSON.stringify({ type: 'tts_stop' }));
          }
        }
      };

      ttsWorkletNodeRef.current.connect(audioContextRef.current.destination);
    }

    const wsProto = window.location.protocol === 'https:' ? 'wss:' : 'ws:';
    const socket = new WebSocket(`${wsProto}//${window.location.host}/ws`);

    socket.onopen = () => {
      console.log('WebSocket connected');
      setIsConnected(true);
    };

    socket.onmessage = (event) => {
      if (typeof event.data === 'string') {
        try {
          const message = JSON.parse(event.data);
          handleJSONMessage(message);
        } catch (error) {
          console.error('Error parsing message:', error);
        }
      }
    };

    socket.onclose = () => {
      console.log('WebSocket disconnected');
      setIsConnected(false);
    };

    socket.onerror = (error) => {
      console.error('WebSocket error:', error);
      setIsConnected(false);
    };

    socketRef.current = socket;
  }, []);

  const disconnect = useCallback(() => {
    if (socketRef.current) {
      socketRef.current.close();
      socketRef.current = null;
    }
    if (audioContextRef.current) {
      audioContextRef.current.close();
      audioContextRef.current = null;
    }
    if (ttsWorkletNodeRef.current) {
      ttsWorkletNodeRef.current.disconnect();
      ttsWorkletNodeRef.current = null;
    }
    setIsConnected(false);
  }, []);

  const handleJSONMessage = useCallback((data) => {
    const { type, content } = data;

    switch (type) {
      case 'partial_user_request':
        setMessages((prev) => {
          const filtered = prev.filter((m) => m.type !== 'partial' || m.role !== 'user');
          if (content?.trim()) {
            return [
              ...filtered,
              {
                id: 'partial-user-current', // Stable ID
                role: 'user',
                content,
                type: 'partial',
                timestamp: Date.now(),
              },
            ];
          }
          return filtered;
        });
        break;

      case 'final_user_request':
        setMessages((prev) => {
          const filtered = prev.filter((m) => m.type !== 'partial' || m.role !== 'user');
          if (content?.trim()) {
            return [
              ...filtered,
              {
                id: `final-user-${Date.now()}`,
                role: 'user',
                content,
                type: 'final',
                timestamp: Date.now(),
              },
            ];
          }
          return filtered;
        });
        break;

      case 'partial_assistant_answer':
        setMessages((prev) => {
          const filtered = prev.filter((m) => m.type !== 'partial' || m.role !== 'assistant');
          if (content?.trim()) {
            return [
              ...filtered,
              {
                id: 'partial-assistant-current', // Stable ID
                role: 'assistant',
                content,
                type: 'partial',
                timestamp: Date.now(),
              },
            ];
          }
          return filtered;
        });
        break;

      case 'final_assistant_answer':
        setMessages((prev) => {
          const filtered = prev.filter((m) => m.type !== 'partial' || m.role !== 'assistant');
          if (content?.trim()) {
            return [
              ...filtered,
              {
                id: `final-assistant-${Date.now()}`,
                role: 'assistant',
                content,
                type: 'final',
                timestamp: Date.now(),
              },
            ];
          }
          return filtered;
        });
        break;

      case 'tts_chunk':
        if (ttsWorkletNodeRef.current && content) {
          const int16Data = base64ToInt16Array(content);
          ttsWorkletNodeRef.current.port.postMessage(int16Data);
        }
        break;

      case 'tts_interruption':
      case 'stop_tts':
        if (ttsWorkletNodeRef.current) {
          ttsWorkletNodeRef.current.port.postMessage({ type: 'clear' });
        }
        setIsTTSPlaying(false);
        break;

      default:
        console.log('Unknown message type:', type);
    }
  }, []);

  const base64ToInt16Array = (b64) => {
    const raw = atob(b64);
    const buf = new ArrayBuffer(raw.length);
    const view = new Uint8Array(buf);
    for (let i = 0; i < raw.length; i++) {
      view[i] = raw.charCodeAt(i);
    }
    return new Int16Array(buf);
  };

  const sendAudioData = useCallback((audioBuffer) => {
    if (socketRef.current?.readyState === WebSocket.OPEN) {
      socketRef.current.send(audioBuffer);
    }
  }, []);

  const clearHistory = useCallback(() => {
    setMessages([]);
    if (socketRef.current?.readyState === WebSocket.OPEN) {
      socketRef.current.send(JSON.stringify({ type: 'clear_history' }));
    }
  }, []);

  const setSpeed = useCallback((speed) => {
    if (socketRef.current?.readyState === WebSocket.OPEN) {
      socketRef.current.send(JSON.stringify({ type: 'set_speed', speed }));
    }
  }, []);

  useEffect(() => {
    return () => {
      disconnect();
    };
  }, [disconnect]);

  return {
    isConnected,
    messages,
    connect,
    disconnect,
    clearHistory,
    setSpeed,
    sendAudioData,
    isTTSPlaying,
  };
}

export default useWebSocket;
