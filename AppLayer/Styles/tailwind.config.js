/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {},
    colors: {
      Background: "#9cdbec",
      Layer1: "#ffd700",
      Layer2: "#0A4D68",
      Layer3: "#088395",
      Layer4: "#05BFDB",
      Layer5: "#00FFCA",
    },
  },
  plugins: [require("@tailwindcss/forms")],
};
