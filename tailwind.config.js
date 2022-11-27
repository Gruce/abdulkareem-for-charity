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
            gridTemplateRows: {
                // Simple 8 row grid
                8: "repeat(8, minmax(0, 1fr))",

                // Complex site-specific row configuration
                layout: "200px minmax(900px, 1fr) 100px",
            },
            height: {
                app: "calc(100vh - 5rem)",
                main: "calc(100vh - 11.625rem)",
            },
            fontFamily: {
                noto: ["Noto Sans Arabic", "sans-serif"],
                NotoKufi: ['Noto Kufi Arabic , sans-serif'],

            },

            //Border Color

            borderColor: {
                primary: {
                    100: "#c2ebd8",
                    200: "#abe4c9",
                    300: "#93dcba",
                    400: "#7cd5ac",
                    500: "#4ec68e",
                    600: "#3cba7f",
                    700: "#34a26f",
                    800: "#2d8b5f",
                    900: "#25744f",
                },

                secondary: {
                    300: "#d7d7ed",
                    400: "#b3b5de",
                    500: "#6c6fbf",
                    600: "#4b4fad",
                    700: "#3c3f89",
                    800: "#2c2e66",
                    900: "#1d1e42",
                },
            },

            //Website Color

            colors: {
                primary: {
                    100: "#c2ebd8",
                    200: "#abe4c9",
                    300: "#93dcba",
                    400: "#7cd5ac",
                    500: "#4ec68e",
                    600: "#3cba7f",
                    700: "#34a26f",
                    800: "#2d8b5f",
                    900: "#25744f",
                },
                secondary: {
                    200: "#72738f",
                    300: "#d7d7ed",
                    400: "#b3b5de",
                    500: "#6c6fbf",
                    600: "#4b4fad",
                    700: "#3c3f89",
                    800: "#2c2e66",
                    900: "#1d1e42",
                },
                tertiary: {
                     50: "#f3fae7",
                },

                success: {
                     50: "#e5ebf6",
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
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("daisyui"),
    ],
};
