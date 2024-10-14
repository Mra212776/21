let selectedDiamond = "";
let selectedGame = "";
let selectedJumlah = "";
let userId = "";
let zoneId = "";
let resultName = "";
let userEmail = "";
let selectedBank = "";
let promoCode = ""; // Variabel untuk kode promo

// Fungsi untuk menangkap kode promo dari input
function applyPromo() {
    const promoInput = document.getElementById("promoCode").value; // Ambil kode promo dari input
    if (promoInput) {
        promoCode = promoInput;
        alert(`Kode promo "${promoCode}" berhasil diterapkan!`);
    } else {
        alert("Silakan masukkan kode promo.");
    }
}

// Fungsi untuk menangkap pilihan bank/metode bayar
function chooseBank(element) {
    const bankName = element.querySelector("span").textContent;
    selectedBank = bankName;

    // Perbarui tampilan footer
    updateFooterText();
}

// Fungsi untuk menangkap pilihan diamond dan nama game dari elemen yang diklik
function chooseDiamond(element) {
    const gameImage = element.querySelector("img");
    const gameName = gameImage.alt; // Ambil nama game dari atribut alt
    const diamondText = element.querySelector("p").textContent; // Ambil jumlah diamond dari teks elemen p

    selectedGame = gameName;
    selectedDiamond = diamondText;

    // Perbarui tampilan footer
    updateFooterText();
}

// Fungsi untuk memperbarui tampilan footer
function updateFooterText() {
    let footerText = '';

    if (selectedDiamond && selectedGame) {
        footerText += `Kamu memilih: ${selectedDiamond} untuk game ${selectedGame}`;
    }

    if (selectedBank) {
        footerText += ` dan pembayaran melalui bank ${selectedBank}`;
    }

    document.getElementById("footerText").innerText = footerText;
}

// Fungsi untuk menangkap input jumlah pembelian dari pengguna
function chooseJumlah(inputElement) {
    selectedJumlah = inputElement.value; // Simpan jumlah pembelian yang dimasukkan pengguna
    if (selectedJumlah <= 0 || selectedJumlah === "") {
        alert("Silakan masukkan jumlah yang valid");
        selectedJumlah = "";
    }
}

// Fungsi untuk cek nama berdasarkan User ID dan Zone ID menggunakan API Velixs
document.getElementById("checkBtn").addEventListener("click", async () => {
    userId = document.getElementById("id").value; // Ambil User ID
    zoneId = document.getElementById("zoneid").value; // Ambil Zone ID
    const game = "ml"; // Nama game sudah ditetapkan sebagai 'ml'
    const apikey = "ac4f4c2cdd97fb4976f6338df9d1555a1e0820f1786209dbf1"; // API Key

    // Cek input yang diperlukan
    if (!userId || !zoneId) {
        alert("Harap masukkan semua informasi yang diperlukan.");
        return;
    }

    const body = {
        game: game,
        id: userId,
        zoneid: zoneId,
        apikey: apikey
    };

    // Tampilkan loading sebelum menghubungi API
    const loadingDiv = document.getElementById("loading");
    const resultDiv = document.getElementById("result");
    loadingDiv.style.display = "block"; // Tampilkan loading
    resultDiv.style.display = "none"; // Sembunyikan hasil sebelumnya

    try {
        const response = await fetch("https://api.velixs.com/idgames-checker", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(body)
        });

        const result = await response.json();

        // Tampilkan hasil
        if (result.status) {
            resultName = result.data.username; // Simpan nama hasil
            resultDiv.innerHTML = `Username: ${resultName}`;
        } else {
            resultDiv.innerHTML = `Pesan: ${result.message}`;
        }
        resultDiv.style.display = "block"; // Tampilkan hasil
    } catch (error) {
        console.error("Terjadi kesalahan:", error);
        alert("Terjadi kesalahan saat menghubungi API.");
    } finally {
        // Sembunyikan loading setelah mendapatkan respon
        loadingDiv.style.display = "none";
    }
});

// Fungsi untuk mengirimkan pesan ke WhatsApp
function sendToWhatsApp() {
    // Ambil email yang dimasukkan
    userEmail = document.getElementById("email").value;
    if (
        !selectedGame ||
        !selectedDiamond ||
        !selectedJumlah ||
        !userId ||
        !zoneId ||
        !resultName ||
        !userEmail ||
        !selectedBank
    ) {
        alert(
            "Silakan lengkapi semua informasi (game, diamond, jumlah, User ID, Zone ID, Nama Hasil, Email, dan Metode Bayar)."
        );
        return;
    }

    const message = `
*Nama Game:*  
> ${selectedGame}
*Jumlah Diamond:*  
> ${selectedDiamond}
*Jumlah Pembelian:*  
> ${selectedJumlah}
*User ID:*  
> ${userId}
*Zone ID:*  
> ${zoneId}
*Nama Hasil:*  
> ${resultName}
*Email:*  
> ${userEmail}
*Metode Bayar:*  
> ${selectedBank}
*Kode Promo:*  
> ${promoCode || "Tidak ada"}
        `;

    // Buka WhatsApp dengan pesan yang dihasilkan
    window.open(
        `https://wa.me/6287718922253?text=${encodeURIComponent(message)}`,
        "_blank"
    );
}
