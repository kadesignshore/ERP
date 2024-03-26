/**
 * This is a minimal config.
 *
 * If you need the full config, get it from here:
 * https://unpkg.com/browse/tailwindcss@latest/stubs/defaultConfig.stub.js
 */
/** @type {import('tailwindcss').Config} */
module.exports = {
    mode:'jit',
    content: [
        /**
         * HTML. Paths to Django template files that will contain Tailwind CSS classes.
         */
        './node_modules/preline/dist/*.js',
        './node_modules/preline/src/plugins/tabs/*.ts',
        '../../contacts/templates/*.{html,js}',
        '../../**/*.{html,js}',
        /*  Templates within theme app (<tailwind_app_name>/templates), e.g. base.html. */
        '../templates/**/*.html',

        /*
         * Main templates directory of the project (BASE_DIR/templates).
         * Adjust the following line to match your project structure.
         */
        '../../templates/**/*.html',

        /*
         * Templates in other django apps (BASE_DIR/<any_app_name>/templates).
         * Adjust the following line to match your project structure.
         */
        '../../**/templates/**/*.html',

        /**
         * JS: If you use Tailwind CSS in JavaScript, uncomment the following lines and make sure
         * patterns match your project structure.
         */
        /* JS 1: Ignore any JavaScript in node_modules folder. */
        // '!../../**/node_modules',
        /* JS 2: Process all JavaScript files in the project. */
        // '../../**/*.js',

        /**
         * Python: If you use Tailwind CSS classes in Python, uncomment the following line
         * and make sure the pattern below matches your project structure.
         */
        '../../**/*.py',
    ],  
    darkMode: 'class',
    theme: {
        extend: {
        colors: {
            current: 'currentColor',
            black: '#000',
            white: '#fff',
            allports: {
            '50': '#f0f9ff',
            '100': '#e0f2fe',
            '200': '#bbe7fc',
            '300': '#7ed5fb',
            '400': '#3abef6',
            '500': '#10a7e7',
            '600': '#0486c5',
            '700': '#0571a9',
            '800': '#085b84',
            '900': '#0d4b6d',
            '950': '#093048',
            }
        },
        keyframes: {
            "bounce-right": {
            '0%, 100%': { transform: 'rotate(-3deg)' },
            '50%': { transform: 'rotate(3deg)' },
            }
        }
        },
    },
    plugins: [
        /**
         * '@tailwindcss/forms' is the forms plugin that provides a minimal styling
         * for forms. If you don't like it or have own styling for forms,
         * comment the line below to disable '@tailwindcss/forms'.
         */
        // require('@tailwindcss/forms'),
        // require('@tailwindcss/typography'),
        // require('@tailwindcss/aspect-ratio'),
        // require('/node_modules/preline/plugin'),
        // require('./'),
        require('./node_modules/preline/plugin')
    ],
}
