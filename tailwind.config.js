const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                'xs': '.75rem',
                'sm': '.875rem',
                'tiny': '.875rem',
                'base': '1rem',
                'lg': '1.125rem',
                'xl': '1.25rem',
                '2xl': '1.5rem',
                '3xl': '1.875rem',
                '4xl': '2.25rem',
                '5xl': '3rem',
                '6xl': '4rem',
                '7xl': '5rem',
                '8xl': '6rem',
                '9xl': '7rem',
                '10xl': '8rem',
                '12xl': '10rem',
                '15xl': '15rem',
            },
            // custom color scheme added below here!
            colors:{
                RosyBrown: {
                    "50": "#FAF6F5",
                    "100": "#F3EAE8",
                    "200": "#E7D4D0",
                    "300": "#DABFB9",
                    "400": "#CEA9A1",
                    "500": "#C2948A",
                    "600": "#AB6C5E",
                    "700": "#835044",
                    "800": "#57352D",
                    "900": "#2C1B17"
                },
                BlueSapphire: {
                    "50": "#E5F0F5",
                    "100": "#CBE0EC",
                    "200": "#97C1D8",
                    "300": "#5FA0C3",
                    "400": "#3C7DA0",
                    "500": "#28536B",
                    "600": "#204355",
                    "700": "#18313F",
                    "800": "#11232D",
                    "900": "#081116"
                },
                PewterBlue: {
                    "50": "#F1F6F8",
                    "100": "#E4EDF1",
                    "200": "#CCDDE5",
                    "300": "#B1CAD8",
                    "400": "#99BACC",
                    "500": "#7EA8BE",
                    "600": "#558CAA",
                    "700": "#3F687D",
                    "800": "#2B4655",
                    "900": "#152229"
                },
                CafeAuLait: {
                    "50": "#F8F4F1",
                    "100": "#F0E5E0",
                    "200": "#E0CCC2",
                    "300": "#D3B5A7",
                    "400": "#C39B88",
                    "500": "#B4826A",
                    "600": "#99654D",
                    "700": "#734C3A",
                    "800": "#4B3126",
                    "900": "#251913"
                },
                KhakiWeb: {
                    "50": "#F9F8F6",
                    "100": "#F1EFE9",
                    "200": "#E3DFD3",
                    "300": "#D6D0BD",
                    "400": "#C8C0A7",
                    "500": "#BBB193",
                    "600": "#A09269",
                    "700": "#7A6F4D",
                    "800": "#514A33",
                    "900": "#29251A"
                },
            },
        },
    },

    colors: {
        // Build your palette here
        transparent: 'transparent',
        current: 'currentColor',
        white: colors.white,
        black: colors.black,
        slate: colors.slate,
        gray: colors.gray,
        neutral: colors.neutral,
        stone: colors.stone,
        red: colors.red,
        orange: colors.orange,
        amber: colors.amber,
        yellow: colors.yellow,
        lime: colors.lime,
        green: colors.green,
        emerald: colors.emerald,
        teal: colors.teal,
        cyan: colors.cyan,
        sky: colors.sky,
        blue: colors.blue,
        indigo: colors.indigo,
        violet: colors.violet,
        purple: colors.purple,
        fuchsia: colors.fuchsia,
        pink: colors.pink,
        rose: colors.rose,

        /* Alternative names for some colours */
        primary: colors.blue,
        secondary: colors.purple,
        tertiary: colors.gray,
        danger: colors.red,
        warning: colors.amber,
        info: colors.slate,
        success: colors.green,
    },
    variants:{
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
