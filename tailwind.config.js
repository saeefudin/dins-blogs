/** @type {import('tailwindcss').Config} */
const defaultTheme = require("@tailwindcss/defaultTheme");

export default {
    content: [
        "./resource/**/*.blade.php",
        "./resource/**/*.js",
        "./resource/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter var", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [],
};
