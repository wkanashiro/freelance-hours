// mapeia o css e js da aplicação para quando rodar o npm run build (cria uma pasta assets na public)
// usuário não acessa a pasta resources

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
