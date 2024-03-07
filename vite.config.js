import { defineConfig } from 'vite';
import Inspect from 'vite-plugin-inspect'
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        Inspect(),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
