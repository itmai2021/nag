<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('/assets/css/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('/assets/images/NAG.png') }}" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.awesome-markers/2.0.5/leaflet.awesome-markers.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css">
    <style>
        html,
        body {
            overflow-x: hidden;
        }

        #mapid {
            height: 600px;
        }

        .image_resized {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        img {
            height: auto;
        }

        @media (max-width: 768px) {
            table {
                display: block;
                width: 100%;
            }

            table tr {
                display: block;
                width: 100%;
            }

            table td {
                display: block;
                width: 100%;
            }

            table img {
                max-width: 100%;
                height: auto;
            }

            .footer__container {
                gap: 0;
            }
        }
    </style>
    <title>New Armada Group</title>
</head>



<body style="background-color: rgb(249 250 251 / var(--tw-bg-opacity, 0.8))">
    <!-- Navbar -->
    <!-- Navbar -->
    <nav id="mainNavbar" class="navbar navbar-expand-xl navbar-dark w-100 custom-navbar">
        <div class="container-fluid px-0 py-2 d-flex justify-content-between align-items-center">

            <!-- Logo -->
            <div class="d-flex justify-content-between align-items-center w-100 px-0">
                <!-- Logo kiri -->
                <a href="{{ route('home') }}" class="logo d-flex align-items-center ms-0">
                    <img src="{{ asset('/assets/images/NAG.png') }}" alt="Logo" class="logo-img">
                </a>
                <!-- Hamburger kanan -->
                <button class="navbar-toggler d-xl-none me-0 custom-toggler" type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#mainNavbarOffcanvas"
                    aria-controls="mainNavbarOffcanvas"
                    aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>
            </div>

            <!-- Menu Desktop -->
            <div class="d-none d-xl-flex align-items-center ms-auto me-4">
                <ul class="nav-links d-flex gap-3 m-0">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Tentang Kami</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('about_us') }}">Profil</a></li>
                            <li><a href="{{ route('home') }}#pilar">Sektor Bisnis</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('news') }}">Berita</a></li>
                    <li><a href="{{ route('home') }}#location">Lokasi</a></li>
                    <li><a href="{{ route('contact_us') }}#location">Hubungi Kami</a></li>
                    <li><a href="https://career.mekararmadainvestama.co.id/" target="_blank">Karir</a></li>
                </ul>
                @php
                $currentLang = request('lang') ?? session('locale', 'id');
                $flag = $currentLang === 'en' ? 'EN' : 'ID';
                @endphp
                <!-- Language Selector -->
                <ul class="nav-links d-flex gap-2 m-0 ms-3">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">{{ $flag }}</a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a href="?lang=id">Indonesia</a></li>
                            <li><a href="?lang=en">English</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- Offcanvas (Mobile Menu) -->
            <div class="offcanvas offcanvas-end text-light d-xl-none" tabindex="-1" id="mainNavbarOffcanvas"
                style="background-color: #031843;"
                aria-labelledby="mainNavbarOffcanvasLabel">
                <div class="offcanvas-body">
                    <ul class="navbar-nav flex-column gap-2">
                        <li class="nav-item dropdown">
                            <h5 class="offcanvas-title mb-2" id="mainNavbarOffcanvasLabel"><img src="{{ asset('/assets/images/NAG.png') }}" alt="Logo" class="logo-img"></h5>

                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Tentang Kami</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('about_us') }}">Profil</a></li>
                                <li><a href="{{ route('home') }}#pilar">Sektor Bisnis</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('news') }}" class="nav-link">Berita</a></li>
                        <li><a href="{{ route('home') }}#location" class="nav-link">Lokasi</a></li>
                        <li><a href="{{ route('contact_us') }}#location" class="nav-link">Hubungi Kami</a></li>
                        <li><a href="https://career.mekararmadainvestama.co.id/" class="nav-link" target="_blank">Karir</a></li>
                        <li class="nav-item dropdown mt-3">
                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">{{ $flag }}</a>
                            <ul class="dropdown-menu">
                                <li><a href="?lang=id">Indonesia</a></li>
                                <li><a href="?lang=en">English</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <!-- Konten Halaman -->
    @yield('content')

    <!-- Footer -->
    <footer id="contact">
        <div class="section__container footer__container">
            <!-- Kolom Logo -->
            <div class="footer__col mt-4">
                <div class="footer__logo">
                    <img src="{{ asset('/assets/images/NAG.png') }}" alt="Logo" class="img-fluid"
                        style="max-width: 70vh;">
                </div>
                <p class="text-white">Together We Are Strong!</p>
            </div>

            <!-- Kolom Kontak -->
            <div class="footer__col mt-4">
                <h4 class="text-white">Hubungi Kami</h4>
                <ul class="footer__links p-0">
                    <li>
                        <p class="text-white m-0 p-0"><i class="ri-phone-fill"></i> (021) 3841061</p>
                    </li>
                    <li>
                        <p class="text-white m-0 p-0"><i class="ri-mail-fill"></i> secretariat@mai.nag.co.id</p>
                    </li>
                    <li>
                        <p class="text-white m-0 p-0"><i class="ri-map-pin-2-fill"></i> Jl. Tanah Abang II
                            No.104, Cideng, Jakarta Pusat</p>
                    </li>
                </ul>
            </div>

            <!-- Kolom Sosial Media -->
            <div class="footer__col mt-4">
                <h4 class="text-white">Ikuti Kami</h4>
                <ul class="footer__socials p-0">
                    <li><a href="https://www.instagram.com/newarmadagroup?igsh=eDB2dm9zbHQ2ejFy" target="_blank"><i
                                class="ri-instagram-line"></i></a></li>
                    <li><a href="https://id.linkedin.com/company/pt-mekar-armada-investama-new-armada-group"
                            target="_blank"><i class="ri-linkedin-line"></i></a></li>
                </ul>
            </div>
        </div>

        <hr class="text-light m-0">
        <div class="footer__bar text-white">2025 © New Armada Group</div>
    </footer>


    <!-- Tombol Kembali ke Atas -->
    <button id="scrollToTopBtn" class="btn btn-primary rounded-circle shadow"
        style="position: fixed; bottom: 30px; right: 30px; display: none; z-index: 999; background-color:#2887ff !important">
        ↑
    </button>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.awesome-markers/2.0.5/leaflet.awesome-markers.js"></script>
    @yield('script')
    <script>
        AOS.init({
            duration: 800, // durasi animasi
            once: true // animasi hanya sekali
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Navbar scroll hide/show
            let lastScrollTop = 0;
            const navbar = document.getElementById('mainNavbar');

            window.addEventListener('scroll', function() {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                if (scrollTop > lastScrollTop) {
                    navbar.classList.add('nav-hidden');
                } else {
                    navbar.classList.remove('nav-hidden');
                }

                if (scrollTop > 0) {
                    navbar.classList.add('nav-scrolled-up');
                } else {
                    navbar.classList.remove('nav-scrolled-up');
                }

                lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;

                // Tombol scroll to top muncul jika scroll > 100px
                const scrollToTopBtn = document.getElementById("scrollToTopBtn");
                if (scrollTop > 100) {
                    scrollToTopBtn.style.display = "block";
                } else {
                    scrollToTopBtn.style.display = "none";
                }
            });

            // Scroll ke atas saat tombol diklik
            const scrollToTopBtn = document.getElementById("scrollToTopBtn");
            scrollToTopBtn.addEventListener("click", function() {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });

            // Scroll horizontal sektor bisnis
            const scrollContainer = document.getElementById("scrollContainer");
            const scrollLeftBtn = document.getElementById("scrollLeftBtn");
            const scrollRightBtn = document.getElementById("scrollRightBtn");

            if (scrollContainer && scrollLeftBtn && scrollRightBtn) {
                scrollLeftBtn.addEventListener("click", () => {
                    scrollContainer.scrollBy({
                        left: -320,
                        behavior: 'smooth'
                    });
                });

                scrollRightBtn.addEventListener("click", () => {
                    scrollContainer.scrollBy({
                        left: 320,
                        behavior: 'smooth'
                    });
                });
            }

            // Pilar navigasi (jika ada)
            const setupPilarToggle = (openId, sectionId, backId) => {
                const openBtn = document.getElementById(openId);
                const section = document.getElementById(sectionId);
                const backBtn = document.getElementById(backId);
                const pilar = document.getElementById("pilar");

                if (openBtn && section && backBtn && pilar) {
                    openBtn.addEventListener("click", () => {
                        // Scroll ke #pilar sebelum disembunyikan
                        pilar.scrollIntoView({
                            behavior: 'smooth'
                        });

                        // Tambahkan delay sedikit agar scroll sempat terjadi
                        setTimeout(() => {
                            pilar.classList.add("d-none");
                            section.classList.remove("d-none");
                        }, 300); // 300ms cukup untuk animasi scroll
                    });

                    backBtn.addEventListener("click", () => {
                        section.classList.add("d-none");
                        pilar.classList.remove("d-none");
                        pilar.scrollIntoView({
                            behavior: 'smooth'
                        });
                    });
                }
            };

            setupPilarToggle("open-automotive", "automotive", "back-to-pilar");
            setupPilarToggle("open-manufacture", "manufacture", "back-to-pilar2");
            setupPilarToggle("open-finance", "finance", "back-to-pilar3");
            setupPilarToggle("open-other", "other", "back-to-pilar4");

            const toggler = document.querySelector(".custom-toggler");
            const offcanvas = document.getElementById("mainNavbarOffcanvas");

            toggler.addEventListener("click", function() {
                this.classList.toggle("active");
            });

            offcanvas.addEventListener("hidden.bs.offcanvas", function() {
                toggler.classList.remove("active");
            });

            setupPilarToggle("open-automotive", "automotive", "back-to-pilar");
            setupPilarToggle("open-manufacture", "manufacture", "back-to-pilar2");
            setupPilarToggle("open-finance", "finance", "back-to-pilar3");
            setupPilarToggle("open-other", "other", "back-to-pilar4");

            const toggler = document.querySelector(".custom-toggler");
            const offcanvas = document.getElementById("mainNavbarOffcanvas");

            toggler.addEventListener("click", function() {
                this.classList.toggle("active");
            });

            offcanvas.addEventListener("hidden.bs.offcanvas", function() {
                toggler.classList.remove("active");
            });
        });
    </script>

</body>

</html>