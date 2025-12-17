/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      // Pindahkan warna dari script blade ke sini:
      colors: {
          primary: '#1E40AF',
          secondary: '#3730A3',
          accent: '#059669',
          gold: '#F59E0B',
          navy: '#1E3A8A',
          emerald: '#065F46'
      }
    },
  },
  plugins: [],
}