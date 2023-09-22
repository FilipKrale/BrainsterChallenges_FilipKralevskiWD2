/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{js,jsx,ts,tsx}",
  ],
  theme: {
    fontFamily: {
      roboto: ["Roboto", "sans-serif"],
    },

    extend: {
      container: {
        center: true,
        padding: {
          DEFAULT: "2rem",
          md: "3rem",
          lg: "4rem",
          xl: "5rem",
          
        },
      },
      colors: {
        primary: "#d3d3d3",
        secondary: "#5c5c5c",
      },
      height: {
      },
      rotate:{
        35: "35deg"
      }
    },
  },
  plugins: [],
}
