import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "node_modules/preline/dist/*.js",
    ],
    theme: {
        boxShadow: {
            sm: "0 1px 2px 0 rgba(0, 0, 0, 0.05)",
            DEFAULT:
                "0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)",
            md: "0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)",
            lg: "0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)",
            xl: "0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)",
            t: "0 -1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)",
            orange: "0px 20px 20px -15px rgba(6, 182, 212, 0.81)", // Warna cyan
            "orange-md": "0px 20px 40px -15px rgba(6, 182, 212, 0.81)", // Warna cyan
            none: "none",
        },
        extend: {
            fontFamily: {
                sans: [
                    "Poppins",
                    "sans-serif",
                    ...defaultTheme.fontFamily.sans,
                ],
            },
            colors: {
                transparent: "transparent",
                cyan: {
                    100: "#CFFAFE",
                    500: "#06B6D4", // Warna cyan
                },
            },
        },
    },

    variants: {
        extend: {
            boxShadow: ["active", "hover"],
        },
    },
    plugins: [
        // require('@tailwindcss/forms'),
        require("preline/plugin"),
    ],
};
