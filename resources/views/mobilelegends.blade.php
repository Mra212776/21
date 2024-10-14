<!doctype html>
<html>
    <head>
        <title>Game Store</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
            rel="stylesheet"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.0/dist/tailwind.min.css"
            rel="stylesheet"
        />

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <!-- Include Tailwind CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
            rel="stylesheet"
        />
        <!-- Include Font Awesome -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        />

        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
        />
        <link
            rel="stylesheet"
            href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
        />
        <link
            rel="stylesheet"
            href="ml/style/style.css"
            type="text/css"
            media="all"
        />
    </head>
    <body>
        <!-- Navbar -->
        <header class="shadow-md">
            <div
                class="container mx-auto flex items-center justify-between py-4 px-6"
            >
                <div class="flex items-center space-x-4">
                    <a href="#">
                        <img src="logo/logo.png" alt="Logo" class="w-36" />
                    </a>
                </div>

                <!-- Menu items -->

                <!-- Mobile Menu -->
                <div class="md:hidden flex items-center">
                    <button
                        id="mobile-menu-btn"
                        class="focus:outline-none"
                        color="#efdfbb"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-6 h-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4 6h16M4 12h16M4 18h16"
                            />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu Dropdown -->
            <nav id="mobile-menu" class="hidden shadow-md md:hidden">
                <ul class="space-y-2 py-4 px-6">
                    <li>
                        <a
                            href="https://mra.serv00.net/tellgames/index.html"
                            class="flex items-center hover:text-white"
                            color="#efdfbb"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-house-door-fill mr-2"
                                viewBox="0 0 16 16"
                            >
                                <path
                                    d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"
                                />
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <a
                            href="#promo"
                            class="flex items-center hover:text-white"
                            color="#efdfbb"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-bag-plus-fill mr-2"
                                viewBox="0 0 16 16"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"
                                />
                            </svg>
                            Promo
                        </a>
                    </li>
                    <li>
                        <a
                            href="#service"
                            class="flex items-center hover:text-white"
                            color="#efdfbb"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-journal-text mr-2"
                                viewBox="0 0 16 16"
                            >
                                <path
                                    d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"
                                />
                                <path
                                    d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"
                                />
                                <path
                                    d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"
                                />
                            </svg>
                            Service
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <!-- End Navbar -->

        <!-- list items -->
        <div class="container mx-auto max-w-screen-lg p-4">
            <div class="section">
                <nav class="text-sm text-gray-500 mb-4">
                    <a class="hover:underline" href="#"> Home </a>
                    /
                    <span class="text-gray-700"> Mobile Legends </span>
                </nav>
                <div class="bg-gray-900 rounded-lg shadow p-4 mb-6">
                    <div class="flex">
                        <img
                            alt="Mobile Legends Top Up"
                            class="w-24 h-24 rounded-lg mr-4"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/aMUDfJmIIfv2c01JvZei0y8jU66DsVdejGtFQp2jLumfMExcC.jpg"
                            width="100"
                        />
                        <div>
                            <span
                                class="bg-gray-700 text-white text-xs font-semibold px-2 py-1 rounded"
                            >
                                TOP UP
                            </span>
                            <h1 class="text-xl font-bold mt-2">
                                Mobile Legends
                            </h1>
                            <ul class="text-sm text-white mt-2">
                                <li>1. Masukkan User ID dan Zone ID Anda</li>
                                <li>2. Contoh : 1234567 (1234)</li>
                                <li>
                                    3. Pilih Nominal Diamonds yang kamu inginkan
                                </li>
                                <li>4. Selesaikan pembayaran</li>
                                <li>
                                    5. Diamonds akan ditambahkan ke akun Mobile
                                    Legends kamu
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-gray-900 rounded flex border-b border-gray-200 mb-4"
                >
                    <button
                        class="text-blue-600 font-semibold px-4 py-2 border-b-2 border-blue-600"
                    >
                        Pembelian
                    </button>
                    <button class="text-gray-600 font-semibold px-4 py-2">
                        Gift Voucher
                    </button>
                </div>
                <div class="flex items-center mb-2">
                    <span class="text-pink-500 text-lg font-bold mr-2">
                        1
                    </span>
                    <span class="text-lg font-semibold"> List diamond </span>
                </div>
                <div class="mb-4">
                    <div
                        class="bg-pink-100 text-pink-600 text-sm rounded-full px-3 py-2 inline-block mb-3"
                    >
                        <i class="mr-1"> </i>
                        🔥 80.163 item dibeli hari ini!
                    </div>
                    <div class="flex space-x-2 overflow-x-auto pb-2">
                        <button
                            class="bg-gray-100 text-gray-600 text-sm font-semibold px-4 py-2 rounded-full whitespace-nowrap"
                        >
                            Mobile Legend Pass
                        </button>
                        <button
                            class="bg-gray-100 text-gray-600 text-sm font-semibold px-4 py-2 rounded-full whitespace-nowrap"
                        >
                            Premium Supply MLBB
                        </button>
                        <button
                            class="bg-gray-100 text-gray-600 text-sm font-semibold px-4 py-2 rounded-full whitespace-nowrap"
                        >
                            Pre-order diamonds
                        </button>
                        <button
                            class="bg-gray-100 text-gray-600 text-sm font-semibold px-4 py-2 rounded-full whitespace-nowrap"
                        >
                            Diamonds
                        </button>
                        <button
                            class="bg-gray-100 text-gray-600 text-sm font-semibold px-4 py-2 rounded-full whitespace-nowrap"
                        >
                            Starlight
                        </button>
                    </div>
                </div>

                <div class="game-list">
                    <a
                        class="game-item item-game"
                        onclick="chooseDiamond(this)"
                    >
                        <img
                            alt="Mobile Legends"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/bMyaGA2AvAJfXCnl9CpH9NpCdFe75Ru3iEi4gNUBOMLqi3kTA.jpg"
                            width="100"
                        />
                        <p>500 Diamond - Rp60.000</p>
                    </a>

                    <a
                        class="game-item item-game"
                        onclick="chooseDiamond('1.000 Diamond - Rp115.000')"
                    >
                        <img
                            alt="Mobile Legends"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/bMyaGA2AvAJfXCnl9CpH9NpCdFe75Ru3iEi4gNUBOMLqi3kTA.jpg"
                            width="100"
                        />
                        <p>1.000 Diamond - Rp115.000</p>
                    </a>

                    <a
                        class="game-item item-game"
                        onclick="chooseDiamond('1.500 Diamond - Rp165.000')"
                    >
                        <img
                            alt="Mobile Legends"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/bMyaGA2AvAJfXCnl9CpH9NpCdFe75Ru3iEi4gNUBOMLqi3kTA.jpg"
                            width="100"
                        />
                        <p>1.500 Diamond - Rp165.000</p>
                    </a>

                    <a
                        class="game-item item-game"
                        onclick="chooseDiamond('2.000 Diamond - Rp210.000')"
                    >
                        <img
                            alt="Mobile Legends"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/bMyaGA2AvAJfXCnl9CpH9NpCdFe75Ru3iEi4gNUBOMLqi3kTA.jpg"
                            width="100"
                        />
                        <p>2.000 Diamond - Rp210.000</p>
                    </a>

                    <a
                        class="game-item item-game"
                        onclick="chooseDiamond('2.500 Diamond - Rp260.000')"
                    >
                        <img
                            alt="Mobile Legends"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/bMyaGA2AvAJfXCnl9CpH9NpCdFe75Ru3iEi4gNUBOMLqi3kTA.jpg"
                            width="100"
                        />
                        <p>2.500 Diamond - Rp260.000</p>
                    </a>

                    <a
                        class="game-item item-game"
                        onclick="chooseDiamond('3.000 Diamond - Rp310.000')"
                    >
                        <img
                            alt="Mobile Legends"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/bMyaGA2AvAJfXCnl9CpH9NpCdFe75Ru3iEi4gNUBOMLqi3kTA.jpg"
                            width="100"
                        />
                        <p>3.000 Diamond - Rp310.000</p>
                    </a>

                    <a
                        class="game-item item-game hidden"
                        onclick="chooseDiamond('5.000 Diamond - Rp510.000')"
                    >
                        <img
                            alt="Mobile Legends"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/bMyaGA2AvAJfXCnl9CpH9NpCdFe75Ru3iEi4gNUBOMLqi3kTA.jpg"
                            width="100"
                        />
                        <p>5.000 Diamond - Rp510.000</p>
                    </a>

                    <a
                        class="game-item item-game hidden"
                        onclick="chooseDiamond('10.000 Diamond - Rp1.000.000')"
                    >
                        <img
                            alt="Mobile Legends"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/bMyaGA2AvAJfXCnl9CpH9NpCdFe75Ru3iEi4gNUBOMLqi3kTA.jpg"
                            width="100"
                        />
                        <p>10.000 Diamond - Rp1.000.000</p>
                    </a>

                    <a
                        class="game-item item-game hidden"
                        onclick="chooseDiamond('500 Diamond - Rp60.000')"
                    >
                        <img
                            alt="Mobile Legends"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/bMyaGA2AvAJfXCnl9CpH9NpCdFe75Ru3iEi4gNUBOMLqi3kTA.jpg"
                            width="100"
                        />
                        <p>500 Diamond - Rp60.000</p>
                    </a>
                </div>

                <div class="show-more">
                    <a href="#" id="toggleLink">Tampilkan lebih banyak</a>
                </div>
            </div>
            <div class="section"></div>

            <!-- Jumblah pembelian -->
            <div class="mb-6">
                <div class="flex items-center mb-2">
                    <span class="text-pink-500 text-lg font-bold mr-2">
                        2
                    </span>
                    <span class="text-lg font-semibold">
                        Masukkan jumlah pembelian
                    </span>
                </div>
                <input
                    class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 text-black"
                    placeholder="Masukkan jumlah"
                    type="number"
                    id="purchaseAmount"
                    min="1"
                    oninput="chooseJumlah(this)"
                />
            </div>
            <!-- Walet type -->
            <!-- Section 2: Pilih metode bayar -->
            <div class="mb-6">
                <div class="flex items-center mb-2">
                    <span class="text-pink-500 text-lg font-bold mr-2">3</span>
                    <span class="text-lg font-semibold"
                        >Pilih metode bayar</span
                    >
                </div>

                <div class="mb-4">
                    <span class="block text-gray-700 font-medium mb-2"
                        >E-Wallet dan QRIS</span
                    >
                    <div
                        class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4"
                    >
                        <!-- Pilihan Shopee Pay -->
                        <div
                            class="wallet border border-gray-300 rounded-lg p-3"
                            onclick="chooseBank(this)"
                        >
                            <div class="flex items-center mb-2">
                                <img
                                    alt="Shopee Pay"
                                    class="inline-block mr-2 rounded-lg"
                                    src="https://storage.googleapis.com/a1aa/image/pReuhPWPOcyLSKP1YUh1RBFhTfebrSvCJsLc7EfX5DffcSW5E.jpg"
                                    width="40"
                                />
                                <span class="font-medium">Shopee Pay</span>
                            </div>
                        </div>

                        <!-- Pilihan Go-Pay -->
                        <div
                            class="wallet border border-gray-300 rounded-lg p-3"
                            onclick="chooseBank(this)"
                        >
                            <div class="flex items-center mb-2">
                                <img
                                    alt="Go-Pay"
                                    class="inline-block mr-2 rounded-lg"
                                    src="https://storage.googleapis.com/a1aa/image/TWvgJ0lQKGouF9bJf892fkVKoz3OM3DgD3Vt7krIoFzxJZlTA.jpg"
                                    width="40"
                                />
                                <span class="font-medium">Go-Pay</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Check id -->
            <div class="mb-6">
                <div class="flex items-center mb-4">
                    <span class="text-pink-500 text-lg font-bold mr-2">
                        4
                    </span>
                    <span class="text-lg font-semibold">
                        Masukkan detail akun
                    </span>
                    <a class="text-blue-500 ml-2" href="#">Panduan</a>
                </div>

                <!-- Bagian input tanpa menampilkan informasi game -->
                <div class="grid grid-cols-2 gap-4">
                    <!-- Input User ID -->
                    <input
                        class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 text-black"
                        placeholder="Masukkan User ID"
                        type="text"
                        id="id"
                    />

                    <!-- Input Zone ID -->
                    <input
                        class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 text-black"
                        placeholder="Zone ID"
                        type="text"
                        id="zoneid"
                    />
                </div>

                <!-- Tombol Cek Nama -->
                <div class="mt-4">
                    <button
                        id="checkBtn"
                        class="bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
                    >
                        Cek Nama
                    </button>

                    <!-- Hasil dan Loading -->
                    <h2 class="mt-4 text-lg font-semibold">Hasil:</h2>
                    <div id="result" class="text-gray-700 mt-2"></div>
                    <div id="loading" class="hidden text-gray-500 mt-2">
                        Loading...
                    </div>

                    <!-- Petunjuk ID -->
                    <p class="text-gray-500 text-sm mt-4">
                        Tap menu profil di pojok kiri atas dari menu utama game
                        untuk melihat ID. Contoh: 12345678(1234)
                        <a class="text-blue-500" href="#">Selengkapnya</a>
                    </p>
                </div>

                <br />
                <!-- Section 4: Masukkan info kontak -->
                <div class="mb-6">
                    <div class="flex items-center mb-2">
                        <span class="text-pink-500 text-lg font-bold mr-2"
                            >5</span
                        >
                        <span class="text-lg font-semibold"
                            >Masukkan info kontak</span
                        >
                    </div>
                    <input
                        id="email"
                        class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 text-black"
                        placeholder="Masukkan email"
                        type="email"
                    />
                    <p class="text-gray-500 text-sm mt-2">
                        Kamu bisa isi jika mau terima bukti transaksi
                    </p>
                </div>
                <!-- Code promo -->
                <div class="mb-6">
                    <div class="flex items-center mb-2">
                        <span class="text-pink-500 text-lg font-bold mr-2"
                            >6</span
                        >
                        <span class="text-lg font-semibold">Code promo</span>
                    </div>
                </div>
                <div class="flex">
                    <input
                        id="promoCode"
                        class="w-full border border-gray-300 rounded-l-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300 text-black ease-in-out"
                        placeholder="Masukkan kode promo"
                        type="text"
                    />
                    <button
                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-r-md transition-all duration-300 ease-in-out"
                        onclick="applyPromo()"
                    >
                        Gunakan
                    </button>
                </div>
            </div>
        </div>

        <br /><br /><br /><br />
        <div class="footer">
            <div
                class="fixed bottom-0 left-0 right-0 bg-gray-900 text-center py-2 shadow-lg flex justify-between items-center px-4"
            >
                <p id="footerText" class="text-white text-xs font-semibold">
                    Silakan pilih jumlah diamond yang Anda inginkan
                </p>
                <button
                    onclick="sendToWhatsApp()"
                    class="bg-gray-700 hover:bg-gray-800 text-white font-bold px-4 py-1 rounded-full mt-1 transition duration-300 ease-in-out transform hover:scale-105"
                >
                    Beli Sekarang
                </button>
            </div>
        </div>

        <!-- end list items -->
        <script src="ml/js/app.js"></script>
        <script src="ml/js/id.js"></script>
        <script>
            // Toggle mobile menu
            document
                .getElementById("mobile-menu-btn")
                .addEventListener("click", () => {
                    document
                        .getElementById("mobile-menu")
                        .classList.toggle("hidden");
                });
        </script>
        <script>
            AOS.init();
        </script>
    </body>
</html>
