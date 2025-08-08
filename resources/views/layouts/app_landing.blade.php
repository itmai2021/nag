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
    <style>
        #mapid {
            height: 600px;
        }
    </style>
    <title>New Armada Group</title>
</head>

<body>
    <!-- Navbar -->
    <nav id="mainNavbar" class="custom-navbar w-100">
        <div class="container-fluid d-flex justify-content-between align-items-center py-2 px-4">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('/assets/images/NAG.png') }}" alt="Logo" style="height: 50px;">
            </a>
            <div class="d-flex align-items-center gap-4">
                <ul class="nav-links d-flex gap-4 m-0">
                    <li><a href="{{ route('about_us') }}">Tentang Kami</a></li>
                    <li><a href="{{ route('home') }}#pilar">Sektor Bisnis</a></li>
                    <li><a href="{{ route('news') }}">Berita</a></li>
                    <li><a href="{{ route('home') }}#location">Lokasi</a></li>
                    <li><a href="https://career.mekararmadainvestama.co.id/" target="_blank">Karir</a></li>
                </ul>
                @php
                $currentLang = request('lang') ?? session('locale', 'id');
                $flag = $currentLang === 'en' ? 'EN' : 'ID';
                @endphp
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle text-white text-decoration-none" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $flag }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                        <li><a class="dropdown-item text-dark" href="?lang=id">Indonesia</a></li>
                        <li><a class="dropdown-item text-dark" href="?lang=en">English</a></li>
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
            <div class="footer__col mt-4">
                <div class="footer__logo">
                    <img src="{{ asset('/assets/images/NAG.png') }}" alt="Logo" class="img-fluid" style="max-width: 70vh;">
                </div>
                <p>Together We Are Strong!</p>
            </div>
            <div class="footer__col mt-4">
                <h4>Hubungi Kami</h4>
                <ul class="footer__links p-0">
                    <li>
                        <a href="#"><i class="ri-phone-fill"></i> (021) 3841061</a>
                    </li>
                    <li>
                        <a href="#"><i class="ri-mail-fill"></i>secretariat@mai.nag.co.id</a>
                    </li>
                    <li>
                        <a href="#"><i class="ri-map-pin-2-fill"></i> Jl. Tanah Abang II No.104, Cideng, Jakarta Pusat</a>
                    </li>
                </ul>
            </div>
            <div class="footer__col mt-4">
                <h4>Ikuti Kami</h4>
                <ul class="footer__socials p-0">
                    <li><a href="https://www.instagram.com/newarmadagroup?igsh=eDB2dm9zbHQ2ejFy" target="_blank"><i class="ri-instagram-line"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/pt-mekar-armada-investama-new-armada-group/posts/?feedView=all" target="_blank"><i class="ri-linkedin-line"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer__bar">2025 © New Armada Group</div>
    </footer>

    <!-- Tombol Kembali ke Atas -->
    <button id="scrollToTopBtn" class="btn btn-primary rounded-circle shadow" style="position: fixed; bottom: 30px; right: 30px; display: none; z-index: 999;">
        ↑
    </button>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
                        pilar.classList.add("d-none");
                        section.classList.remove("d-none");
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
        });
    </script>

</body>

</html>