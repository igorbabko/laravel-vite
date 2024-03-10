import { defineConfig } from 'vite'
import Inspect from 'vite-plugin-inspect'
import laravel from 'laravel-vite-plugin'
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        Inspect(),
        laravel({
            input: ['resources/js/app.js'],
            refresh: true
        }),
        vue()
    ]
})
