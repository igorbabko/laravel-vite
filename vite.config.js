import { defineConfig } from 'vite'
import Inspect from 'vite-plugin-inspect'
import laravel from 'laravel-vite-plugin'
import react from '@vitejs/plugin-react'

export default defineConfig({
    plugins: [
        Inspect(),
        laravel({
            input: ['resources/js/app.jsx'],
            refresh: true
        }),
        react()
    ]
})
