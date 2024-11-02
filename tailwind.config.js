/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './resources/**/*.ts',
    './resources/views/**/*.blade.php',
    './resources/views/**/*.vue',
    './resources/js/**/*.js',
    './resources/js/**/*.vue',
  ],
  theme: {
    extend: {
        font: {
            sans: ['Segoe UI', 'Roboto', 'sans-serif'],
        }
    },
  },
  plugins: [],
}