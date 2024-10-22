/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./components/*.php",
    "./dist/tailwind/**/*.{css,html}", // Fixed path pattern
  ],
  theme: {
    extend: {
      screens: {
        "2xl": "1400px",
        "ds": "320px",
        "xxs": "350px",
        "sm": "680px",
        "xs": "516px", // Corrected typo
        "bs": "520px",
      },
      colors: {
        "primary": "#7E22CE",
        "fade": "#101010",
        "light-primary": "#d5b2d7",
        "tresh": "#0f172a",
        "pur": "#1e293b",
        "dark-blue": "#003459",
      },
    },
  },
  plugins: [
    // Add any necessary plugins here
  ],
};