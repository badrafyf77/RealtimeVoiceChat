export function createWebcamManager(callbacks) {
  let stream = null;

  return {
    async start() {
      try {
        const mediaStream = await navigator.mediaDevices.getUserMedia({
          video: {
            width: { ideal: 1280 },
            height: { ideal: 720 },
            facingMode: 'user',
          },
          audio: false,
        });

        stream = mediaStream;
        callbacks.onStream?.(mediaStream);
        console.log('Webcam started');
      } catch (error) {
        console.error('Error accessing webcam:', error);
        callbacks.onError?.(error);
        throw error;
      }
    },

    stop() {
      if (stream) {
        stream.getTracks().forEach((track) => track.stop());
        stream = null;
        console.log('Webcam stopped');
      }
    }
  };
}
