/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/views/welcome.blade.php", // Añade esta línea específica
  ],
  theme: {
    extend: {
      fontFamily: {
        love: ['Dancing Script', 'cursive'],
      },
    },
  },
  plugins: [],
}