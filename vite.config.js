import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.jsx'],
            refresh: true,
        }),
        react(),
        tailwindcss(),
    ],
    server: {
        cors:true,
        hmr: {
            host: "probable-potato-xv6vr76rxh6wj7-5173.app.github.dev",
            clientPort: 443,
            protocol:'wss',
        },
        
    }

});
