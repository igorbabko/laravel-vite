import { defineConfig } from 'vite'
import Inspect from 'vite-plugin-inspect'
import laravel from 'laravel-vite-plugin'
import { ViteImageOptimizer } from 'vite-plugin-image-optimizer'

export default defineConfig({
    plugins: [
        Inspect(),
        laravel({
            input: ['resources/js/app.js'],
            refresh: true
        }),
        ViteImageOptimizer({
            jpg: {
                quality: 50
            }
        })
    ]
})
