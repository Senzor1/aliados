const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    //mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            custom:{
                100: '#27c227d1',
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    corePlugins:{
        container : false,
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
