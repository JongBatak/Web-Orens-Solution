// tailwind.config.js
module.exports = {
  content: [
    "./*.html",       // Semua file HTML di root folder
    "./*.php",        // Jika kamu pakai PHP
    "./**/*.{js,ts}", // Jika kamu pakai JavaScript atau TypeScript
  ],
  theme: {
    extend: {
      fontFamily: {
        poppins: ['Poppins', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
