import { defineConfig } from 'vite';

export default defineConfig({
  build: {
    outDir: '../static',
    emptyOutDir: false,
    rollupOptions: {
      output: {
        entryFileNames: 'app.js',
        assetFileNames: (assetInfo) => {
          if (assetInfo.name === 'style.css') return 'app.css';
          return '[name].[ext]';
        }
      }
    }
  },
  server: {
    port: 3000,
    proxy: {
      '/ws': {
        target: 'ws://localhost:8000',
        ws: true
      }
    }
  }
});
