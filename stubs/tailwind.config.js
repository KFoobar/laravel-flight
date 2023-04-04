const defaultTheme = require('tailwindcss/defaultTheme');
const plugin = require('tailwindcss/plugin');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/kfoobar/flight/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'class',
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        plugin(function({ addVariant }) {
            addVariant('optional', '&:optional')
            addVariant('group-optional', ':merge(.group):optional &')
            addVariant('peer-optional', ':merge(.peer):optional ~ &')
        })
    ],
    safelist: [
       {
           pattern: /bg-(.+)-|text-(.+)-/,
           variants: ['hover', 'focus'],
       },
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },
};
