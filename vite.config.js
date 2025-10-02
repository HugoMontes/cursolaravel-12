import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/tomselect.js",
                "resources/js/tinymce.js",
                "resources/js/flatpickr.js",
                "resources/js/imageview.js",
            ],
            refresh: true,
        }),
    ],
});
