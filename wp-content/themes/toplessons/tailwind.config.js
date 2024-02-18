const { screens } = require("tailwindcss/defaultTheme");

module.exports = {
    // content: ["./**/*.html"],
    content: ["./**/*.php"],
    theme: {
        extend: {
            fontFamily: {
                body: ["Roboto", "sans-serif"]
            },
            colors: {
                body: "#3C3D46",
                border: "#66464E",
                highlight: "#316ea0"
            },
            backgroundImage: {
                'newsletter': "url('/wp-content/uploads/2023/06/newsletter-bg-1.webp')",
            },
        },
        screens: {
            xs: "426px",
            ...screens
        },
    },
    plugins: [require("@tailwindcss/forms")],
};