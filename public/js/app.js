// Item satu

document.getElementById("toggleLink").addEventListener("click", function (e) {
    e.preventDefault(); // Mencegah aksi default link

    // Ambil semua elemen dengan class 'game-item' yang bukan hidden
    const allItems = document.querySelectorAll(".item-game");

    // Jika saat ini teks adalah 'Tampilkan lebih banyak'
    if (this.textContent === "Tampilkan lebih banyak") {
        // Tampilkan semua elemen
        allItems.forEach(function (item) {
            item.style.display = "block"; // Menampilkan item
        });
        this.textContent = "Tampilkan lebih sedikit"; // Ubah teks menjadi 'Tampilkan lebih sedikit'
    } else {
        // Sembunyikan elemen-elemen lagi setelah 6 item pertama
        allItems.forEach(function (item, index) {
            if (index >= 6) {
                // Menyembunyikan item setelah index ke-5
                item.style.display = "none";
            }
        });
        this.textContent = "Tampilkan lebih banyak"; // Ubah teks menjadi 'Tampilkan lebih banyak'
    }
});

// End item satu

// Item dua

document
    .getElementById("toggleLinkItem")
    .addEventListener("click", function (e) {
        e.preventDefault(); // Mencegah aksi default link

        // Ambil semua elemen dengan class 'game-item' yang bukan hidden
        const allItems = document.querySelectorAll(".item-game-2");

        // Jika saat ini teks adalah 'Tampilkan lebih banyak'
        if (this.textContent === "Tampilkan lebih banyak") {
            // Tampilkan semua elemen
            allItems.forEach(function (item) {
                item.style.display = "block"; // Menampilkan item
            });
            this.textContent = "Tampilkan lebih sedikit"; // Ubah teks menjadi 'Tampilkan lebih sedikit'
        } else {
            // Sembunyikan elemen-elemen lagi setelah 6 item pertama
            allItems.forEach(function (item, index) {
                if (index >= 6) {
                    // Menyembunyikan item setelah index ke-5
                    item.style.display = "none";
                }
            });
            this.textContent = "Tampilkan lebih banyak"; // Ubah teks menjadi 'Tampilkan lebih banyak'
        }
    });

// End item dua

// Item tiga

document
    .getElementById("toggleLinkItemGame")
    .addEventListener("click", function (e) {
        e.preventDefault(); // Mencegah aksi default link

        // Ambil semua elemen dengan class 'game-item' yang bukan hidden
        const allItems = document.querySelectorAll(".item-game-3");

        // Jika saat ini teks adalah 'Tampilkan lebih banyak'
        if (this.textContent === "Tampilkan lebih banyak") {
            // Tampilkan semua elemen
            allItems.forEach(function (item) {
                item.style.display = "block"; // Menampilkan item
            });
            this.textContent = "Tampilkan lebih sedikit"; // Ubah teks menjadi 'Tampilkan lebih sedikit'
        } else {
            // Sembunyikan elemen-elemen lagi setelah 6 item pertama
            allItems.forEach(function (item, index) {
                if (index >= 6) {
                    // Menyembunyikan item setelah index ke-5
                    item.style.display = "none";
                }
            });
            this.textContent = "Tampilkan lebih banyak"; // Ubah teks menjadi 'Tampilkan lebih banyak'
        }
    });


// End item tiga
