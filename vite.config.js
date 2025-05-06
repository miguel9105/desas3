import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css','resources/sass/conocenos.scss','resources/js/conocenos.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
