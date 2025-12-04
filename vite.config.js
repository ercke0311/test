import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
        server: {
        // 開放 CORS 給你的開發網域（簡單粗暴版）
        cors: {
            origin: [
                'https://test.dev',
                'https://vite.test.dev',
            ],
        },
        hmr: {
            host: 'test.dev', // 或 'vite.test.dev'，兩個都可以試
        },
    },
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
