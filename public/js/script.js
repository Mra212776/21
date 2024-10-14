document.addEventListener("DOMContentLoaded", () => {
    const gameCards = document.querySelectorAll(".game-card");
    const gameSection = document.getElementById("game-selection");
    const topupSection = document.getElementById("topup-section");
    const topupForm = document.getElementById("topup-form");

    gameCards.forEach(card => {
        card.addEventListener("click", function () {
            const selectedGame = this.getAttribute("data-game");
            console.log("Game selected:", selectedGame);

            // Hide game selection and show top-up section
            gameSection.classList.add("hidden");
            topupSection.classList.remove("hidden");
        });
    });

    topupForm.addEventListener("submit", function (event) {
        event.preventDefault();

        const diamondAmount = document.getElementById("diamond-amount").value;
        const paymentMethod = document.getElementById("payment-method").value;

        if (diamondAmount && paymentMethod) {
            alert(
                `Anda telah memilih:\nJumlah Diamond: ${diamondAmount}\nMetode Pembayaran: ${paymentMethod}`
            );
        } else {
            alert("Silakan lengkapi semua pilihan.");
        }
    });
});

// image slider
// Initialize Swiper.js slider
// document.addEventListener("DOMContentLoaded", function () {
//     const swiper = new Swiper(".swiper", {
//         loop: true,
//         pagination: {
//             el: ".swiper-pagination",
//             clickable: true
//         },
//         autoplay: {
//             delay: 3000, // 3 second delay between slides
//             disableOnInteraction: false
//         },
//         effect: "fade", // You can change this effect to 'slide', 'cube', 'coverflow', etc.
//         fadeEffect: {
//             crossFade: true
//         }
//     });
// });
//

// document.addEventListener('DOMContentLoaded', function () {
//     const swiper = new Swiper('.swiper', {
//         loop: true,
//         pagination: {
//             el: '.swiper-pagination',
//             clickable: true,
//         },
//         autoplay: {
//             delay: 3000,
//             disableOnInteraction: false,
//         },
//         effect: 'slide',  // Kamu bisa ubah efeknya di sini
//     });
// });
//

const swiper = new Swiper('.swiper', {
    slidesPerView: 1,
    pagination: { el: '.swiper-pagination', clickable: true },
    autoplay: { delay: 3000, disableOnInteraction: false },
});

// Theme toggle
const themeToggle = document.getElementById("theme-toggle");
const toggleIcon = document.getElementById("toggle-icon");
themeToggle.addEventListener("click", () => {
    document.body.classList.toggle("dark");
    toggleIcon.textContent = document.body.classList.contains("dark") ? "🌞" : "🌙"; // Change icon based on mode
});
