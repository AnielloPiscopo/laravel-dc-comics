import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
const path = require("path"); // <-- require path from node

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/scss/app.scss",
                "resources/js/app.js",
                "resources/js/Admin/deleteComicElement.js",
            ],
            refresh: true,
        }),
    ],

    resolve: {
        alias: {
            "~resources": "/resources/",
        },
    },
});
