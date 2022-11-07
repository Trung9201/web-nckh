import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/admin.css",
                "resources/js/admin.js",
                "resources/js/app.js",
                "resources/css/app.css",
                "resources/js/home.js",
                "resources/css/home.css",
                "resources/js/pg.js",
                "resources/css/pg.css",
                "resources/js/danle.js",
                "resources/css/danle.css",
                "resources/js/feedback.js",
                "resources/css/feedback.css",
                "resources/js/personnel.js",
                "resources/css/personnel.css",
            
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '$': 'jQuery'
        },
    }
});
