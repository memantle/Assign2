import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        cors:true,
        hmr: {
            cors:true,
            host: "probable-potato-xv6vr76rxh6wj7-5173.app.github.dev",
            clientPort: 443,
            protocol:'wss',
        },
        
    }

});
