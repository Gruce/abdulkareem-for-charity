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
            
            'height': {
                'app': 'calc(100vh - 5rem)',
                'main': 'calc(100vh - 11.625rem)',
            },
            fontFamily: {
                'noto':['Noto Sans Arabic', 'sans-serif'],
                'Kufi':['Reem Kufi','sans-serif'],
                'IBM':['IBM Plex Sans Arabic', 'sans-serif'],
            },

            borderColor:{
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
                // primary: {
                //     100: "#ccfffb",
                //     200: "#b3fff9",
                //     300: "#99fff7",
                //     400: "#80fff5",
                //     500: "#00b9ac",
                //     600: "#008080",
                //     700: "#006666",
                // },
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
                // secondary: {
                //     100: "#a094d6",
                //     200: "#9084d2",
                //     300: "#8184ce",
                //     400: "#7a84ca",
                //     500: "#7284c6",
                //     600: "#6c84c2",
                // },
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
        }
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
