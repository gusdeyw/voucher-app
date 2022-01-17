const colors = require('tailwindcss/colors')

module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      spacing: {
        88: '22rem',
        97: '27rem',
      },
      colors: {
        orange: colors.orange,
        bvr10: '#EF501F',
        bvr20: '#EF3700',
        bvr21: '#FFDBD0',
        bvr30: '#DF3400',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/custom-forms'),
    require('daisyui'),
  ],
}
