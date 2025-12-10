import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

export default defineConfig({
  plugins: [vue()],
  server: {
    host: true,
    port: 5174,   // 5176にしたいならここを変える
    proxy: {
      '/api': {
        target: 'http://127.0.0.1:8790',
        changeOrigin: true
      },
      '/time-slice': {
        target: 'http://127.0.0.1:8790',
        changeOrigin: true
      }
    }
  }
})
