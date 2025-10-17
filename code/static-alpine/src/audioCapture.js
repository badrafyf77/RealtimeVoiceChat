const BATCH_SAMPLES = 2048;
const HEADER_BYTES = 8;
const FRAME_BYTES = BATCH_SAMPLES * 2;
const MESSAGE_BYTES = HEADER_BYTES + FRAME_BYTES;

export function createAudioCapture(sendAudioData) {
  let audioContext = null;
  let micWorkletNode = null;
  let mediaStream = null;
  let batchBuffer = null;
  let batchView = null;
  let batchInt16 = null;
  let batchOffset = 0;
  let bufferPool = [];
  let isTTSPlaying = false;

  const initBatch = () => {
    if (!batchBuffer) {
      batchBuffer = bufferPool.pop() || new ArrayBuffer(MESSAGE_BYTES);
      batchView = new DataView(batchBuffer);
      batchInt16 = new Int16Array(batchBuffer, HEADER_BYTES);
      batchOffset = 0;
    }
  };

  const flushBatch = () => {
    const ts = Date.now() & 0xffffffff;
    batchView.setUint32(0, ts, false);
    const flags = isTTSPlaying ? 1 : 0;
    batchView.setUint32(4, flags, false);

    sendAudioData(batchBuffer);

    bufferPool.push(batchBuffer);
    batchBuffer = null;
  };

  const flushRemainder = () => {
    if (batchOffset > 0) {
      for (let i = batchOffset; i < BATCH_SAMPLES; i++) {
        batchInt16[i] = 0;
      }
      flushBatch();
    }
  };

  return {
    async start() {
      try {
        const stream = await navigator.mediaDevices.getUserMedia({
          audio: {
            sampleRate: { ideal: 48000 },
            channelCount: 1,
            echoCancellation: true,
            noiseSuppression: true,
          },
        });

        mediaStream = stream;

        if (!audioContext) {
          audioContext = new AudioContext({ sampleRate: 48000 });
        }

        await audioContext.audioWorklet.addModule('/static/pcmWorkletProcessor.js');

        micWorkletNode = new AudioWorkletNode(audioContext, 'pcm-worklet-processor');

        micWorkletNode.port.onmessage = ({ data }) => {
          const incoming = new Int16Array(data);
          let read = 0;

          while (read < incoming.length) {
            initBatch();
            const toCopy = Math.min(
              incoming.length - read,
              BATCH_SAMPLES - batchOffset
            );
            batchInt16.set(
              incoming.subarray(read, read + toCopy),
              batchOffset
            );
            batchOffset += toCopy;
            read += toCopy;

            if (batchOffset === BATCH_SAMPLES) {
              flushBatch();
            }
          }
        };

        const source = audioContext.createMediaStreamSource(stream);
        source.connect(micWorkletNode);

        console.log('Audio capture started');
      } catch (error) {
        console.error('Error starting audio capture:', error);
        throw error;
      }
    },

    stop() {
      flushRemainder();

      if (micWorkletNode) {
        micWorkletNode.disconnect();
        micWorkletNode = null;
      }

      if (mediaStream) {
        mediaStream.getTracks().forEach((track) => track.stop());
        mediaStream = null;
      }

      if (audioContext) {
        audioContext.close();
        audioContext = null;
      }

      console.log('Audio capture stopped');
    }
  };
}
