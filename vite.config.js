import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/style.css', 'resources/js/ballSlider.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        host: true,
        hmr: {
            host: 'localhost',
        },
        cors: true,
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
