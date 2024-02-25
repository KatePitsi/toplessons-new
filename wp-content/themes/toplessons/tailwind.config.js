const { screens } = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./*.php",
        "./global-templates/**/*.php",
        "./templates/**/*.php",
        "./src/**/*.{php,js}",
        "./svg/social/*.svg.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                body: ["Didact Gothic", "sans-serif"]
            },
            colors: {
                body: "#3C3D46",
                highlight: "#ffb606"
            },
            backgroundImage: {
                // 'newsletter': "url('/wp-content/uploads/2023/06/newsletter-bg-1.webp')",
            },
        },
        screens: {
            xs: "426px",
            ...screens
        },
    },
    plugins: [require("@tailwindcss/forms")],
};