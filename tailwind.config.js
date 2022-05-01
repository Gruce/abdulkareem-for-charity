const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors: {
            primary: {
                100: '#00ff00'         
            },
            secondary: {
                100: '#ff0000'
            },
            success: {
                100: '#ff0000'
            },
            error: {
                100: '#ff0000'
            },
            warning: {
                100: '#ff0000'
            },
            info: {
                100: '#ff0000'
            },
            light: {
                100: '#ff0000'
            }
        },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
