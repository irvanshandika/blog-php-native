/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{php, html}", "./src/**/*.{html,js}", "./node_modules/flowbite/**/*.js"],
  theme: {
    extend: {
      fontFamily: {
        "Heebo" : ['heebo', 'sans-serif']
      }
    },
  },
  plugins: [require("flowbite/plugin")],
};
