/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    colors: {
      'kLightBlue': '#C6E6FD',
      'kDarkBlue': '#010387',
      'kOrange': '#ED4230',
      'kDirtyWhite': '#F5F4F2'
    }
  },
  plugins: [],
}