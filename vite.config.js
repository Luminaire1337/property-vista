import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/scss/layout/*.scss",
                "resources/scss/pages/*.scss",
                "resources/js/app.js",
            ],
            refresh: true,
        }),
    ],
});
