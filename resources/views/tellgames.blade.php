<!doctype html>
<html lang="id">
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
                        <img src="slid/logo.png" alt="Logo" class="w-36" />
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
                            href="#home"
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

        <!-- Image Slider -->
        <!-- Responsive Image Slider Container -->
        <div class="mx-auto max-w-screen-sm p-4 lg:max-w-screen-xs">
            <div
                class="bg-white rounded-lg shadow-lg overflow-hidden w-full h-98"
            >
                <div class="swiper">
                    <!-- Image Slider Wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img
                                src="slid/1.jpg"
                                alt="Image 1"
                                class="w-full h-auto object-cover"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="slid/M.jpg"
                                alt="Image 2"
                                class="w-full h-auto object-cover"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="slid/3.jpg"
                                alt="Image 3"
                                class="w-full h-auto object-cover"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                                src="slid/5.png"
                                alt="Image 4"
                                class="w-full h-auto object-cover"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Image Slider -->

        <br /><br /><br />
        <div class="content">
            <div class="wrap">
                <ul id="ul">
                    <li class="active" id="li">
                        <a href="#">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-controller"
                                viewBox="0 0 16 16"
                            >
                                <path
                                    d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1v-1z"
                                />
                                <path
                                    d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729c.14.09.266.19.373.297.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.34 2.34 0 0 1 .433-.335.504.504 0 0 1-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z"
                                />
                            </svg>
                            Game</a
                        >
                    </li>
                    <li id="li">
                        <a href="#">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-card-heading"
                                viewBox="0 0 16 16"
                            >
                                <path
                                    d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"
                                />
                                <path
                                    d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z"
                                />
                            </svg>
                            Voucher</a
                        >
                    </li>
                    <li>
                        <a href="#">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-ui-checks-grid"
                                viewBox="0 0 16 16"
                            >
                                <path
                                    d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1zm9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-3zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-3zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0l2-2z"
                                />
                            </svg>
                            Event Game</a
                        >
                    </li>
                    <li id="li">
                        <a href="#">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-diagram-3"
                                viewBox="0 0 16 16"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zM8.5 5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1zM0 11.5A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"
                                />
                            </svg>
                            Tournament</a
                        >
                    </li>
                    <li id="li">
                        <a href="#">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-discord"
                                viewBox="0 0 16 16"
                            >
                                <path
                                    d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z"
                                />
                            </svg>
                            Social Media</a
                        >
                    </li>
                </ul>
            </div>
        </div>
        <!-- list items -->
        <div class="container mx-auto max-w-screen-lg p-4">
            <div class="section">
                <h2>🔥 Lagi Populer</h2>
                <div class="game-list">
                    <a
                        class="game-item item-game"
                        id="ml"
                        href="/mobilelegends"
                    >
                        <img
                            alt="Mobile Legends"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/bMyaGA2AvAJfXCnl9CpH9NpCdFe75Ru3iEi4gNUBOMLqi3kTA.jpg"
                            width="100"
                        />
                        <p>Mobile Legends</p>
                    </a>
                    <a class="game-item item-game" href="ux.html">
                        <img
                            alt="Bigo Live"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/gbevbLuptCyJMy8OJeffxfGM1w0IRfimtUp3zDBxjltit4N5E.jpg"
                            width="100"
                        />
                        <p>Bigo Live</p>
                    </a>
                    <a class="game-item item-game" href="data/ff/ff.html">
                        <img
                            alt="Free Fire"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/ftpmPPIfkFv67kWyepfVdMhaFxA9fbvPjLWt63b9bNbsU8mcC.jpg"
                            width="100"
                        />
                        <p>Free Fire</p>
                    </a>
                    <a class="game-item item-game" href="data/codm/codm.html">
                        <img
                            alt="Honor of Kings"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/9EzcBTTl0ZanP5kLaVeJi91Xb9215S8k2jogfgVYbqfzEvJnA.jpg"
                            width="100"
                        />
                        <p>Honor of Kings</p>
                    </a>
                    <a class="game-item item-game" href="ux.html">
                        <img
                            alt="Genshin Impact"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/i2sDYEFenAzMOiG0TSxEGitefx8WocdOewfwaklCxOiUY8mcC.jpg"
                            width="100"
                        />
                        <p>Genshin Impact</p>
                    </a>
                    <a class="game-item item-game" href="ux.html">
                        <img
                            alt="PUBG Mobile"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/M8YtCdbLugJmJJIbObm4DKeUEOp0OALwMeSnjArSeRYxFvJnA.jpg"
                            width="100"
                        />
                        <p>PUBG Mobile</p>
                    </a>
                    <!-- Hidden items -->
                    <a class="game-item item-game hidden" href="ux.html">
                        <img
                            alt="Steam Wallet Code"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/X98eiL7AfFgGPk2QFDneVciTQD1mCyFEM687NVBtb8r9EvJnA.jpg"
                            width="100"
                        />
                        <p>Steam Wallet Code</p>
                    </a>
                    <a class="game-item item-game hidden" href="ux.html">
                        <img
                            alt="Zenless Zone Zero"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/HSrEpmBDMzZMFRP6bkeAQaUTCUqGeBtlz8We9fwO0bSsJemcC.jpg"
                            width="100"
                        />
                        <p>Zenless Zone Zero</p>
                    </a>
                    <a class="game-item hidden" href="ux.html">
                        <img
                            alt="Valorant"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/BpPql1R6PSpOPN9Fc4aKji8yJOlexDRyv0hFvdsqPR0RxbyJA.jpg"
                            width="100"
                        />
                        <p>Valorant</p>
                    </a>
                    <a class="game-item hidden" href="data/ff/ff.html">
                        <img
                            alt="Free Fire MAX"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/pdHB04gUzsZbL5TwOTU7DeOcGqoU26kdIxlBznrVvfwhi3kTA.jpg"
                            width="100"
                        />
                        <p>Free Fire MAX</p>
                    </a>
                </div>
                <div class="show-more">
                    <a href="" id="toggleLink">Tampilkan lebih banyak</a>
                </div>
            </div>
            <div class="section">
                <h2>Top Up Langsung</h2>
                <div class="game-list">
                    <a class="game-item item-game-2" href="ux.html">
                        <img
                            alt="AFK Journey"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/D9itjoAGPEIfLqRhLqE10B5f3nwvzSZtDEhgfNESRFWfKemcC.jpg"
                            width="100"
                        />
                        <p>AFK Journey</p>
                    </a>
                    <a class="game-item item-game-2" href="ux.html">
                        <img
                            alt="Isekai Feast: Tales of Recipes"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/2BLuGrHuTYpTIhXf21LsJaYhgCNmIt4y5NyIgouO65uZxbyJA.jpg"
                            width="100"
                        />
                        <p>Isekai Feast: Tales of Recipes</p>
                    </a>
                    <a class="game-item item-game-2" href="ux.html">
                        <img
                            alt="Free Fire Global"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/mIC2hg9DatYaDh5ZR7hetOYvOVfw6cBrz0MRhx4agXD7i3kTA.jpg"
                            width="100"
                        />
                        <p>Free Fire Global</p>
                    </a>
                    <a class="game-item item-game-2" href="ux.html">
                        <img
                            alt="Ace Racer"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/7Q1YMhAZQRpKLlZKMDQyrfldJit1qUhd6SCfKLysRKoii3kTA.jpg"
                            width="100"
                        />
                        <p>Ace Racer</p>
                    </a>
                    <a class="game-item item-game-2" href="ux.html">
                        <img
                            alt="Astra: Knights of Veda"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/QJ36TCgpKCb1KVjxTomvmDoNv6HAkkweTfnOkwLddN1xi3kTA.jpg"
                            width="100"
                        />
                        <p>Astra: Knights of Veda</p>
                    </a>
                    <a class="game-item item-game-2" href="ux.html">
                        <img
                            alt="Mango Live"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/onhXdoDPxkYUM1KdX0MRuVO2qJ4gTqVlcyD5TS2esA8cxbyJA.jpg"
                            width="100"
                        />
                        <p>Mango Live</p>
                    </a>
                    <a class="game-item item-game-2 hidden" href="ux.html">
                        <img
                            alt="Eggy Party"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/DElXeXebaFt8dESF8OkWkfCfpWKNRofeMrUDFuVHcMuKv4N5E.jpg"
                            width="100"
                        />
                        <p>Eggy Party</p>
                    </a>
                    <a class="game-item item-game-2 hidden" href="ux.html">
                        <img
                            alt="Arena of Valor"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/nDMiJoQLTWrJC9T8Bm1X6r2l2ei6a0sLkSKhyXCuvQVOxbyJA.jpg"
                            width="100"
                        />
                        <p>Arena of Valor</p>
                    </a>
                    <a class="game-item item-game-2 hidden" href="ux.html">
                        <img
                            alt="Astral Guardians: Cyber Fantasy"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/E5Fm9t8804IZEN8CG46LLk4BKDxOApceey6MbKdc1tzui3kTA.jpg"
                            width="100"
                        />
                        <p>Astral Guardians: Cyber Fantasy</p>
                    </a>
                    <a class="game-item item-game-2 hidde" href="ux.html">
                        <img
                            alt="NBA INFINITE"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/FyajejVsP004f0YAoUcUcNLpImeMl48194IFevQKHLfbV8mcC.jpg"
                            width="100"
                        />
                        <p>NBA INFINITE</p>
                    </a>
                </div>
                <div class="show-more">
                    <a href="#" id="toggleLinkItem"> Tampilkan lebih banyak </a>
                </div>
            </div>
            <div class="section">
                <h2>
                    <i class="fas fa-sun"> </i>
                    Baru Rilis
                </h2>
                <div class="game-list">
                    <a class="game-item item-game-3" href="ux.html">
                        <img
                            alt="Draconia Saga"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/vdWBeN43zbxOMaDJdsblBeV8r3FCQehhoXj2yf4QwdIBMemcC.jpg"
                            width="100"
                        />
                        <p>Draconia Saga</p>
                    </a>
                    <a class="game-item item-game-3" href="ux.html">
                        <img
                            alt="Modern Strike Online"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/XQKNqwoa5YIiC1LhdTcKjnSqB9vHU3ghFh3NkEodLq1n4N5E.jpg"
                            width="100"
                        />
                        <p>Modern Strike Online</p>
                    </a>
                    <a class="game-item item-game-3" href="ux.html">
                        <img
                            alt="Night Crows"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/oXqimeKebzkmEEIjEgCB9FrDxFi00nF3CjhVpe7FK1ezKemcC.jpg"
                            width="100"
                        />
                        <p>Night Crows</p>
                    </a>
                    <a class="game-item item-game-3" href="ux.html">
                        <img
                            alt="Night Crows - Drop Link"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/A4zU3kKqKLZsL9e6gxYrEBqzKGAyJdW7uhmuyXL0TWSZxbyJA.jpg"
                            width="100"
                        />
                        <p>Night Crows - Drop Link</p>
                    </a>
                    <a class="game-item item-game-3" href="ux.html">
                        <img
                            alt="The Ants"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/JSkKgMFr94bSLdsAsieD2bufGLgtY1wAcEvq8quGMaPoi3kTA.jpg"
                            width="100"
                        />
                        <p>The Ants</p>
                    </a>
                    <a class="game-item item-game-3 hideen" href="ux.html">
                        <img
                            alt="Arena Breakout Infinite - PC"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/7WbjV5ZGVLaAOhlzX0fX05egm30eODeWdhSHReCmd2QaY8mcC.jpg"
                            width="100"
                        />
                        <p>Arena Breakout Infinite - PC</p>
                    </a>
                    <a class="game-item item-game-3 hidden" href="ux.html">
                        <img
                            alt="Alchemy Stars"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/2XEl672oes0EeU5Yc8644D2pkBHa3tNkHMLwd947z7Q1i3kTA.jpg"
                            width="100"
                        />
                        <p>Alchemy Stars</p>
                    </a>
                    <a class="game-item item-game-3 hidden" href="ux.html">
                        <img
                            alt="Age of Empires Mobile"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/7KwaMgNyACLGEp36i5AABlZiadIzeA9rSS5rjdJhwttfi3kTA.jpg"
                            width="100"
                        />
                        <p>Age of Empires Mobile</p>
                    </a>

                    <a class="game-item item-game-3 hidden" href="ux.html">
                        <img
                            alt="Age of Apes"
                            height="100"
                            src="https://storage.googleapis.com/a1aa/image/91PBTNfwSbyYUaCRppHTiCdK43bcPbMm8sue7R9VBBxni3kTA.jpg"
                            width="100"
                        />
                        <p>Age of Apes</p>
                    </a>
                </div>

                <div class="show-more">
                    <a href="#" id="toggleLinkItemGame">
                        Tampilkan lebih banyak
                    </a>
                </div>
            </div>
        </div>
        <!-- end list items -->
        <script src="js/app.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

        <script>
            // Initialize Swiper
            const swiper = new Swiper(".swiper", {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true
                }
            });
        </script>
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
