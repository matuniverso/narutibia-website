module.exports = {
  purge: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],

  theme: {
    extend: {
      minWidth: {
        '6': '1.5rem',
        '8': '2rem',
      },
      fontFamily: {
        'body': 'Recursive, sans-serif'
      }
    }
  },

  variants: {
    extend: {
      textColor: ['group-focus'],
      backgroundColor: ['group-focus'],
    },
  },

  plugins: [require('@tailwindcss/forms')],
};
