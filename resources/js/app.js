import "./bootstrap";
import AOS from "aos";
import "aos/dist/aos.css"; // Import CSS untuk AOS
import gsap from "gsap";
import { TextPlugin } from "gsap/TextPlugin";
// index.js
import "preline";

// Register TextPlugin
gsap.registerPlugin(TextPlugin);

// Animasi pertama untuk teks "Tapi"
gsap.to("#gsap-first", {
    delay: 1.5, // Delay awal animasi pertama
    duration: 2, // Durasi animasi pertama
    opacity: 1, // Membuat teks terlihat
    x: 0, // Posisi X akan kembali ke posisi normal
    ease: "power4.out", // Jenis easing untuk animasi halus
    text: {
        value: "Tapi", // Teks yang ingin ditampilkan pertama
        delimiter: "", // Teks muncul tanpa delimiter
    },
    onComplete: () => {
        // Callback setelah animasi kedua selesai
        // Menambahkan class ke elemen kedua
        document
            .querySelector("#gsap-second")
            .classList.add("text-header-gradient");
        // Callback setelah animasi pertama selesai
        // Animasi kedua - Teks "Gak Ada Waktu" dengan class tambahan
        gsap.to("#gsap-second", {
            duration: 3, // Durasi animasi kedua
            text: {
                value: "Gak Ada Waktu", // Teks kedua yang ingin ditampilkan
                delimiter: "",
            },
            ease: "power4.out", // Jenis easing untuk animasi halus
            onComplete: () => {
                // Animasi ketiga - Teks "Buat Nyuci?"
                gsap.to("#gsap-third", {
                    duration: 2, // Durasi animasi ketiga
                    text: {
                        value: "Buat Nyuci?", // Teks ketiga yang ingin ditampilkan
                        delimiter: "",
                    },
                    ease: "power4.out", // Jenis easing untuk animasi halus
                });
            },
        });
    },
});

AOS.init();

window.addEventListener("scroll", function () {
    const navbar = document.getElementById("navbar");
    const loginButton = document.querySelector(".login-btn");

    if (!navbar || !loginButton) return; // Prevent errors if elements are not found

    const isScrolled = window.scrollY > 0;

    // Navbar: Toggle classes based on scroll
    navbar.classList.toggle("bg-white", isScrolled);
    navbar.classList.toggle("shadow-md", isScrolled);
    navbar.classList.toggle("py-5", isScrolled);
    navbar.classList.toggle("py-4", !isScrolled);

    // Login Button: Toggle classes based on scroll
    loginButton.classList.toggle("bg-gradient-to-r", isScrolled);
    loginButton.classList.toggle("from-cyan-500/50", isScrolled);
    loginButton.classList.toggle("to-cyan-500", isScrolled);
    loginButton.classList.toggle("text-white", isScrolled);

    loginButton.classList.toggle("bg-inherit", !isScrolled);
    loginButton.classList.toggle("text-gradient", !isScrolled);
    loginButton.classList.toggle("border", !isScrolled);
    loginButton.classList.toggle("border-cyan-500", !isScrolled);
});

// Navbar Menu Mobile
document.querySelector(".open-menu").addEventListener("click", function () {
    const navMobile = document.getElementById("nav-mobile");
    const closeMenu = document.querySelector(".close-menu");

    navMobile.classList.remove("hidden");
    closeMenu.classList.remove("hidden");

    AOS.refresh(); // Refresh AOS agar efek berjalan
    document.querySelector(".open-menu").classList.add("hidden");
});

document.querySelector(".close-menu").addEventListener("click", function () {
    document.getElementById("nav-mobile").classList.add("hidden");
    document.querySelector(".close-menu").classList.add("hidden");
    document.querySelector(".open-menu").classList.remove("hidden");
});

// Navbar Active Link
document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".nav-link");

    // Fungsi untuk memeriksa dan menambahkan kelas aktif
    function setActiveLink() {
        const currentHash = window.location.hash; // Mendapatkan fragment hash (contoh: '#steps')
        const currentPath = window.location.pathname; // Mendapatkan path URL tanpa hash (contoh: '/steps')

        navLinks.forEach((link) => {
            const linkHref = link.getAttribute("href"); // Mendapatkan href dari link (contoh: '#steps' atau '/steps')

            // Menambahkan kelas aktif jika hash fragment atau path URL cocok
            if (linkHref === currentHash || linkHref === currentPath) {
                link.classList.add("text-cyan-500", "font-semibold");
            } else {
                link.classList.remove("text-cyan-500", "font-semibold");
                link.classList.add("hover:text-cyan-500");
            }
        });
    }

    // Panggil fungsi saat pertama kali halaman dimuat
    setActiveLink();

    // Panggil fungsi setiap kali hash fragment berubah
    window.onhashchange = function () {
        setActiveLink();
    };
});

/*==================== SCROLL SECTIONS ACTIVE LINK ====================*/
const sections = document.querySelectorAll("section[id]");

function scrollActive() {
    const scrollY = window.pageYOffset;

    sections.forEach((current) => {
        const sectionHeight = current.offsetHeight;
        const sectionTop = current.offsetTop - 50;
        const sectionId = current.getAttribute("id");

        // Update selector untuk menargetkan elemen dengan class .nav_menu
        const navLink = document.querySelector(
            ".nav_menu a[href*=" + sectionId + "]"
        );
        // Update selector untuk menargetkan elemen dengan class .nav_menu
        const navLinkMobile = document.querySelector(
            ".nav_menu_mobile a[href*=" + sectionId + "]"
        );

        if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
            navLink.classList.add("text-cyan-500", "font-semibold");
            navLinkMobile.classList.add(
                "stroke-cyan-500",
                "font-semibold",
                "text-cyan-500"
            );
        } else {
            navLink.classList.remove("text-cyan-500", "font-semibold");
            navLinkMobile.classList.remove(
                "stroke-cyan-500",
                "font-semibold",
                "text-cyan-500"
            );
        }
    });
}

window.addEventListener("scroll", scrollActive);

// accordion
document.addEventListener("DOMContentLoaded", function () {
    const accordions = document.querySelectorAll(".accordion-header");

    accordions.forEach((header) => {
        header.addEventListener("click", function () {
            const content = this.nextElementSibling;
            content.classList.toggle("hidden");
        });
    });
});
