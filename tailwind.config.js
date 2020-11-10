const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                mono: ['Roboto', ...defaultTheme.fontFamily.mono],
            },
        },
        minHeight: {
       '0': '0',
       '1/4': '25%',
       '1/2': '50%',
       '3/4': '75%',
       'full': '100%',
       'px': '1px',
       '1': '0.25rem',
       '2': '0.5rem',
       '3': '0.75rem',
       '4': '1rem',
       '5': '1.25rem',
       '6': '1.5rem',
       '8': '2rem',
       '10': '2.5rem',
       '12': '3rem',
       '13': '3.25rem',
       '14': '3.5rem',
       '15': '3.75rem',
       '16': '4rem',
       '20': '5rem',
       '72': '18rem',

        },
        minWidth: {
            '0': '0',
            '1/4': '25%',
            '1/2': '50%',
            '3/4': '75%',
            'full': '100%',
            'px': '1px',
            '1': '0.25rem',
            '2': '0.5rem',
            '3': '0.75rem',
            '4': '1rem',
            '5': '1.25rem',
            '6': '1.5rem',
            '8': '2rem',
            '10': '2.5rem',
            '12': '3rem',
            '13': '3.25rem',
            '14': '3.5rem',
            '15': '3.75rem',
            '16': '4rem',
            '20': '5rem',
            '24': '6rem',
            '28': '7rem',
            '32': '8rem',
            '36': '9rem',
            '40': '10rem',
            '72': '18rem',

             }
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

    plugins: [
        require('@tailwindcss/ui'),
        require('@tailwindcss/custom-forms'),
    ],
};
