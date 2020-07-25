const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    purge: {
        content: [
        './resources/**/*.html',
        './resources/**/*.vue',
        './resources/**/*.svelte',
        './resources/**/*.php',
        './resources/**/*.css',
        ],
        enabled: true
    },
  theme: {
    extend: {
      fontFamily: {
        sans: ['Josefin Sans', ...defaultTheme.fontFamily.sans],
        serif: ['Playfair Display', ...defaultTheme.fontFamily.serif]
    },

      boxShadow: theme => ({
        outline: '0 0 0 2px ' + theme('colors.green.500'),
      }),
      fill: theme => theme('colors'),
    },
  },
  variants: {
    fill: ['responsive', 'hover', 'focus', 'group-hover'],
    textColor: ['responsive', 'hover', 'focus', 'group-hover'],
    zIndex: ['responsive', 'focus'],
  },
  plugins: [
    require('@tailwindcss/custom-forms'),
    require('tailwindcss'),
    require('autoprefixer'),
  ]
}
