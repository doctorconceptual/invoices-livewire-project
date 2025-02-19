import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                "880px": {
                    "max": "880px"
                }
            },
            maxWidth: {
                "center-container": "1280px",
            },
            colors: {
                // All Custom Colors
                "main": "#586dce",
                "main-light": "#7588db",
                "text-gray": "#535869",
                "btn-green": "#639274",
                "btn-back-green": "#d3f2cd",
                "txt-red": "#be4966",
                "light-gray-50": "#737886",
                "light-gray-100": "#e4e8ed",
                "light-gray-dark": "#5d6373",
                "back-icon": "#8c919c"
            }
        },
    },
    plugins: [],
};
