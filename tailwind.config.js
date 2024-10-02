/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    require('flowbite/plugin'),
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
