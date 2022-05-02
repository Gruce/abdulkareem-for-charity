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
        extend: {
            fontFamily: {
                sans: ["Cairo", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    100: "#ccfffb",
                    500: "#00b9ac",
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
        }
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
