import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
const path = require("path"); // <-- require path from node

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/scss/app.scss",
                "resources/scss/general.scss",
                "resources/js/app.js",
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
