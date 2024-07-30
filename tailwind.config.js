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
        'dm-sans': [
          "DM Sans", "sans-serif"
        ],
      }
    },
    colors: {
      'kGray': '#5C5959',
      'kLightGray': '#F3F3F3',
      'kWhite': '#FFFFFF',
      'kBlack': '#1F1F1F',
      'kBlackReal': '#000000'
    }
  },
  plugins: [],
}

