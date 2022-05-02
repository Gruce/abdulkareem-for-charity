const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        colors: {
            primary: {
                100: "#00b3ac",
                200: "#00b9ac",
            },
            secondary: {
                100: "#a094d6",
            },
            success: {
                100: "#ff0000",
            },
            error: {
                100: "#ff0000",
            },
            warning: {
                100: "#ff0000",
            },
            info: {
                100: "#ff0000",
            },
            light: {
                100: "#ff0000",
            },
        },
        extend: {
            fontFamily: {
                sans: ["Cairo", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
