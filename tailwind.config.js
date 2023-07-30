/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{php, html}", "./src/**/*.{html,js}", "./node_modules/flowbite/**/*.js"],
  theme: {
    extend: {},
  },
  plugins: [require("flowbite/plugin")],
};