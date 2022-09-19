/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    extend: {
        colors: {
          crmGreen: {
            100: '#345E5C',
            200: '#00302E',
          },
          crmPink:  {
            100: '#FF5C35',
            50: '#FFCB98',
          },
          crmLink:  {
            100: '#5291AE'
          }
        }
      },
  },
  plugins: [],
}
