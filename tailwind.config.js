/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'Roboto-condensed': [
          "Roboto Condensed", "sans-serif"
        ],
        'Roboto': [
          "Roboto", "sans-serif"
        ],
        'Inter': [
          "Inter", "sans-serif"
        ],
      }
    },
    colors: {
      'kLightBlue': '#C6E6FD',
      'kDarkBlue': '#010387',
      'kOrange': '#ED4230',
      'kDirtyWhite': '#F5F4F2',
      'kBlack': '#000000',
      'kLightOrange': '#FDA543'
    }
  },
  plugins: [],
}