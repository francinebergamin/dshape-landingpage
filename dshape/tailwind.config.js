/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {
      fontFamily:{
        raleway: "'Raleway', sans-serif",
        gothic: "'Gothic A1', sans-serif",
      },
    },
  },
  plugins: [],
};
