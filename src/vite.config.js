import { fileURLToPath, URL } from 'node:url'

import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import path from 'path';
import vueDevTools from 'vite-plugin-vue-devtools'

export default defineConfig({
  plugins: [
    vue(),
    vueDevTools(),
  ],
  build: {
    outDir: path.resolve(__dirname, '../dist'),
    emptyOutDir: true,
    rollupOptions: {
        input: path.resolve(__dirname, 'src/main.js'),
        output: {
            entryFileNames: 'main.js', // Fixed output name for the main entry
            chunkFileNames: 'chunk-[name].js', // Optional: control chunk file names
            assetFileNames: 'assets/[name].[ext]' // Optional: control asset file names
        }
    }
  },
  resolve: {
    alias: {
      '@': fileURLToPath(new URL('./src', import.meta.url))
    },
  },
})