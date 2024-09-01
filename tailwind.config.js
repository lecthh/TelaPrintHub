/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
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
      'kGray': '#D9D9D9',
      'kWhite': '#FFFFFF',
      'kBlack': '#1F1F1F',
      'kBlackReal': '#000000',
      'kViolet': 'FF2FDC'
    }
  },
  plugins: [
    require('flowbite/plugin')
  ],
}