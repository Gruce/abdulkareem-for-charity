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
                Kufi: ["Reem Kufi", "sans-serif"],
                IBM: ["IBM Plex Sans Arabic", "sans-serif"],
            },

            borderColor: {
                primary: {
                    50: "#ccf1ee",
                    100: "#99e3dd",
                    200: "#66d5cd",
                    300: "#4ccec4",
                    400: "#32c7bc",
                    500: "#00b9ac",
                    600: "#00a69a",
                    700: "#008178",
                    800: "#006f67",
                    900: "#005c56",
                },
                success: {
                    50: "#e5ebf6",
                    100: "#ccd7ee",
                    200: "#99afde",
                    300: "#6687ce",
                    400: "#4c73c6",
                    500: "#194bb6",
                    600: "#0037ae",
                    700: "#00319c",
                    800: "#002c8b",
                    900: "#002168",
                },
                secondary: {
                    50: "#f0e8f6",
                    100: "#e1d2ed",
                    200: "#d2bce4",
                    300: "#b590d3",
                    400: "#a679ca",
                    500: "#9763c2",
                    600: "#7937b0",
                    700: "#6b21a8",
                    800: "#601d97",
                    900: "#551a86",
                },
            },
            colors: {
                primary: {
                     50: "#e9f6ee",
                    100: "#daefe2",
                    200: "#c8e4d2",
                    300: "#a1d6b5",
                    400: "#98d3ae",
                    500: "#8cd0a5",
                    600: "#78c594",
                    700: "#67b885",
                    800: "#4ea36d",
                    900: "#3c905b",
                },
                secondary: {
                    50: "#d29499",
                    100: "#d29499",
                    200: "#c2797f",
                    300: "#c8666e",
                    400: "#d15a64",
                    500: "#D94C57",
                    600: "#d64451",
                    700: "#d23744",
                    800: "#cd2d3b",
                    900: "#cd1e2c",
                },
                tertiary: {
                     50: "#f3fae7",
                    100: "#edf7da",
                    200: "#edf7db",
                    300: "#e3f0ca",
                    400: "#d3e3b3",
                    500: "#cde0a7",
                    600: "#c1d696",
                    700: "#b9d189",
                    800: "#b1cd7b",
                    900: "#b1cd7b",
                },

                success: {
                     50: "#e5ebf6",
                    100: "#ccd7ee",
                    200: "#99afde",
                    300: "#6687ce",
                    400: "#4c73c6",
                    500: "#194bb6",
                    600: "#0037ae",
                    700: "#00319c",
                    800: "#002c8b",
                    900: "#002168",
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
    ],
};
