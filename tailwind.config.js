/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{php, html}",
   "./src/**/*.{html,js}", 
   "./node_modules/flowbite/**/*.js", 
   './dashboard/**/*.php',
   './auth/**/*.php',
   './restrict/**/*.php',
   './services/**/*.php',
   './view/**/*.php'
  ],
  theme: {
    extend: {
      fontFamily: {
        "Heebo" : ['heebo', 'sans-serif']
      }
    },
  },
  plugins: [require("flowbite/plugin")],
};
