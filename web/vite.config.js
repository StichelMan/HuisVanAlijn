import { defineConfig, loadEnv } from 'vite'
import react from '@vitejs/plugin-react-swc'
import EnvironmentPlugin from "vite-plugin-environment"

export default ({ mode }) => {
  process.env = { ...process.env, ...loadEnv(mode, process.cwd()) }
  return defineConfig({
    plugins: [react(), EnvironmentPlugin("all")],
    base: process.env.VITE_BASE_URL,
    optimizeDeps: {
      include: ['@babel/preset-env'],
    },
    build: {
      target: 'esnext',
    },
  })
}