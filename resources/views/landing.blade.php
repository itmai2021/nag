    @extends('layouts.app_landing')
    @section('content')
    <!-- Hero Section (Carousel) -->
    <section id="Home" class="p-0">
        <div id="carouselHeader" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="{{ asset('/assets/images/gedung_mai.png') }}" class="d-block w-100" alt="Slide 1">
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="{{ asset('/assets/images/gedung_bra.jpg') }}" class="d-block w-100" alt="Slide 2">
                </div>

                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselHeader" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselHeader" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
    </section>
    <section class="section__container destination__container mt-4 mb-5" id="pilar">
        <h2 class="section__header">Sektor Bisnis</h2>
        <p class="section__description">
            Sektor Bisnis usaha utama kami dalam berbagai sektor industri.
        </p>
        <div class="grid-wrapper">
            <div class="grid-no-gap">
                <div class="grid-item automotive" id="open-automotive" style="background-color: #327a83;">
                    <img src="{{ asset('/assets/images/1.png') }}" alt="">
                    <div class="label">AUTOMOTIVE TRADING</div>
                </div>
                <div class="grid-item manufacture" id="open-manufacture" style="background-color: #fcb916;">
                    <img src="{{ asset('/assets/images/2.png') }}" alt="">
                    <div class="label">MANUFACTURE</div>
                </div>
                <div class="grid-item finance" id="open-finance" style="background-color: #259a48;">
                    <img src="{{ asset('/assets/images/3.png') }}" alt="">
                    <div class="label">FINANCIAL SERVICES</div>
                </div>
                <div class="grid-item others" id="open-other" style="background-color: #e81f28;">
                    <img src="{{ asset('/assets/images/4.png') }}" alt="">
                    <div class="label">OTHER SERVICES</div>
                </div>
            </div>

            <div class="nag-logo">
                <img src="{{ asset('/assets/images/NAG.png') }}" alt="">
            </div>

            <!-- <div class="circle-container">
                <div class="circle-item top-left">
                    <i class="fas fa-car"></i>
                    <span id="automotive-smalltext">AUTOMOTIVE<br>TRADING</span>
                </div>
                <div class="circle-item top-right">
                    <i class="fas fa-industry"></i>
                    <span id="manufacture-smalltext">MANUFACTURE</span>
                </div>
                <div class="circle-item bottom-left">
                    <i class="fas fa-university"></i>
                    <span id="financial-smalltext">FINANCIAL<br>SERVICES</span>
                </div>
                <div class="circle-item bottom-right">
                    <i class="fas fa-concierge-bell"></i>
                    <span id="other-smalltext">OTHERS</span>
                </div>
            </div> -->
        </div>
    </section>

    <!-- AUTOMOTIVE -->
    <section class="section__container destination__container mt-5 d-none" id="automotive" style="margin-bottom: 20vh;">
        <h2 class="section__header mb-5 text-center">Automotive Trading</h2>

        <div class="text-left mb-4">
            <p class="mb-0 text-start" id="back-to-pilar" style="cursor: pointer; margin-left: 10vh;">
                <i class="ri-arrow-left-line"></i> Kembali
            </p>
        </div>
        <div class="container py-4" style=" margin-left: 11vh;">
            <div class="custom-grid justify-content-center">
                @foreach($automotive as $auto)
                <div class="logo-item text-center">
                    <img src="{{ asset('assets/images/' . $auto->logo) }}"
                        alt="Logo {{ $auto->company_shortname }}"
                        class="logo-click"
                        data-bs-toggle="modal"
                        data-bs-target="#imageModal{{ $auto->id }}"
                        style="cursor: pointer; max-height: 100px;">
                </div>
                @endforeach
            </div>
        </div>
    </section>

    @foreach($automotive as $auto)
    <div class="modal fade" id="imageModal{{ $auto->id }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $auto->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel{{ $auto->id }}">{{ $auto->company_name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body text-center">
                    <section class="section__container showcase__container">
                        <div class="showcase__image">
                            <img src="{{ asset('assets/images/' . $auto->logo) }}" alt="Logo" />
                        </div>
                        <div class="showcase__content">
                            <p style="text-align: left;">
                                {{ $auto->description }}
                            </p>
                            <div class="showcase__btn" style="position: relative; height: 200px;">
                                @if($auto->web_url)
                                <a href="{{ $auto->web_url }}" target="_blank"
                                    style="position: absolute; bottom: 0; right: 0; color: black; text-decoration: none; display: flex; align-items: center; gap: 5px;">
                                    Selengkapnya
                                    <span><i class="ri-arrow-right-line"></i></span>
                                </a>
                                @endif
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- MANUFACTURE -->
    <section class="section__container destination__container mt-5 d-none" id="manufacture" style="margin-bottom: 20vh;">
        <h2 class="section__header mb-5 text-center">Manufacture</h2>
        <div class="text-left mb-4 ml-4">
            <p class="mb-0 text-start" id="back-to-pilar2" style="cursor: pointer;margin-left: 10vh;">
                <i class="ri-arrow-left-line"></i>Kembali
            </p>
        </div>
        <div class="container py-4" style=" margin-left: 11vh;">
            <div class="custom-grid justify-content-center">
                @foreach($manufacture as $manuf)
                <div class="logo-item text-center">
                    <img src="{{ asset('assets/images/' . $manuf->logo) }}"
                        alt="Logo {{ $manuf->company_shortname }}"
                        class="logo-click"
                        data-bs-toggle="modal"
                        data-bs-target="#imageModal2{{ $manuf->id }}"
                        data-id="{{ $manuf->id }}"
                        data-logo="{{ asset('assets/images/' . $manuf->logo) }}"
                        style="cursor: pointer; max-height: 100px;">
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @foreach($manufacture as $manuf)
    <div class="modal fade" id="imageModal2{{ $manuf->id }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $manuf->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel{{ $manuf->id }}">{{ $manuf->company_name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body text-center">
                    <section class="section__container showcase__container">
                        <div class="showcase__image">
                            <img src="{{ asset('assets/images/' . $manuf->logo) }}" alt="Logo" />
                        </div>
                        <div class="showcase__content">
                            <p style="text-align: left;">
                                {{ $manuf->description }}
                            </p>
                            <div class="showcase__btn" style="position: relative; height: 200px;">
                                @if($manuf->web_url)
                                <a href="{{ $manuf->web_url }}" target="_blank"
                                    style="position: absolute; bottom: 0; right: 0; color: black; text-decoration: none; display: flex; align-items: center; gap: 5px;">
                                    Selengkapnya
                                    <span><i class="ri-arrow-right-line"></i></span>
                                </a>
                                @endif
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- FINANCE -->
    <section class="section__container destination__container mt-5 d-none" id="finance" style="margin-bottom: 20vh;">
        <h2 class="section__header mb-5 text-center">Financial Services</h2>
        <div class="text-left mb-4 ml-4">
            <p class="mb-0 text-start" id="back-to-pilar3" style="cursor: pointer;margin-left: 10vh;">
                <i class="ri-arrow-left-line"></i>Kembali
            </p>
        </div>
        <div class="container py-4" style=" margin-left: 11vh;">
            <div class="custom-grid justify-content-center">
                @foreach($finance as $fn)
                <div class="logo-item text-center">
                    <img src="{{ asset('assets/images/' . $fn->logo) }}"
                        alt="Logo {{ $fn->company_shortname }}"
                        class="logo-click"
                        data-bs-toggle="modal"
                        data-bs-target="#imageModal3{{ $fn->id }}"
                        data-id="{{ $fn->id }}"
                        data-logo="{{ asset('assets/images/' . $fn->logo) }}"
                        style="cursor: pointer; max-height: 100px;">
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @foreach($finance as $fnc)
    <div class="modal fade" id="imageModal3{{ $fnc->id }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $fnc->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel{{ $fnc->id }}">{{ $fnc->company_name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body text-center">
                    <section class="section__container showcase__container">
                        <div class="showcase__image">
                            <img src="{{ asset('assets/images/' . $fnc->logo) }}" alt="Logo" />
                        </div>
                        <div class="showcase__content">
                            <p style="text-align: left;">
                                {{ $fnc->description }}
                            </p>
                            <div class="showcase__btn" style="position: relative; height: 200px;">
                                @if($fnc->web_url)
                                <a href="{{ $fnc->web_url }}" target="_blank"
                                    style="position: absolute; bottom: 0; right: 0; color: black; text-decoration: none; display: flex; align-items: center; gap: 5px;">
                                    Selengkapnya
                                    <span><i class="ri-arrow-right-line"></i></span>
                                </a>
                                @endif
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- OTHER -->
    <section class="section__container destination__container mt-5 d-none" id="other" style="margin-bottom: 20vh;">
        <h2 class="section__header mb-5 text-center">Other Services</h2>
        <div class="text-left mb-4 ml-4">
            <p class="mb-0 text-start" id="back-to-pilar4" style="cursor: pointer;margin-left: 10vh;">
                <i class="ri-arrow-left-line"></i>Kembali
            </p>
        </div>
        <div class="container py-4" style=" margin-left: 11vh;">
            <div class="custom-grid justify-content-center">
                @foreach($others as $other)
                <div class="logo-item text-center">
                    <img src="{{ asset('assets/images/' . $other->logo) }}"
                        alt="Logo {{ $other->company_shortname }}"
                        class="logo-click"
                        data-bs-toggle="modal"
                        data-bs-target="#imageModal4{{ $other->id }}"
                        data-id="{{ $other->id }}"
                        data-logo="{{ asset('assets/images/' . $other->logo) }}"
                        style="cursor: pointer; max-height: 100px;">
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @foreach($others as $other)
    <div class="modal fade" id="imageModal4{{ $other->id }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $other->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel{{ $other->id }}">{{ $other->company_name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body text-center">
                    <section class="section__container showcase__container">
                        <div class="showcase__image">
                            <img src="{{ asset('assets/images/' . $other->logo) }}" alt="Logo" />
                        </div>
                        <div class="showcase__content">
                            <p style="text-align: left;">
                                {{ $other->description }}
                            </p>
                            <div class="showcase__btn" style="position: relative; height: 200px;">
                                @if($other->web_url)
                                <a href="{{ $other->web_url }}" target="_blank"
                                    style="position: absolute; bottom: 0; right: 0; color: black; text-decoration: none; display: flex; align-items: center; gap: 5px;">
                                    Selengkapnya
                                    <span><i class="ri-arrow-right-line"></i></span>
                                </a>
                                @endif
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Berita -->
    <div style="background-color: #f5f5f5;padding-bottom:10vh"> <!-- Ganti warna sesuai keinginan -->
        <section class="container py-5">
            <h2 class="text-left mb-3 fw-bold">Berita</h2>
            <div class="d-flex justify-content-between text-muted mb-5">
                <p class="mb-0">
                    Update terbaru mengenai aktivitas, berita, dan informasi menarik dari kami.
                </p>
                <p class="mb-0 text-end" style="cursor:pointer;">
                    <a href="{{route('news')}}" style="text-decoration: none; color: #343a40;">Semua Berita <i class="ri-arrow-right-line"></i></a>
                </p>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <!-- card 1 -->
                <div class="col">
                    <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                        <img src="/assets/images/card.jpg" class="card-img-top news-img" alt="Berita 1">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Pembangunan Gedung Baru Dimulai</h5>
                            <p class="card-text text-muted">30 Juli 2025</p>
                            <a href="{{route('news_detail')}}" class="text-dark text-decoration-none fw-medium mt-auto">
                                Selengkapnya <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- card 2 -->
                <div class="col">
                    <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                        <img src="/assets/images/card2.jpg" class="card-img-top news-img" alt="Berita 2">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Kegiatan Bakti Sosial di Desa Cibuntu</h5>
                            <p class="card-text text-muted">Senin, 28 Juli 2025</p>
                            <a href="{{route('news_detail')}}" class="text-dark text-decoration-none fw-medium mt-auto">
                                Selengkapnya <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- card 3 -->
                <div class="col">
                    <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                        <img src="/assets/images/card3.webp" class="card-img-top news-img" alt="Berita 3">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Pelatihan Kewirausahaan untuk Remaja</h5>
                            <p class="card-text text-muted">Jumat, 25 Juli 2025</p>
                            <a href="{{route('news_detail')}}" class="text-dark text-decoration-none fw-medium mt-auto">
                                Selengkapnya <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <section class="container-fluid py-5" id="location">
        <div class="container mb-4">
            <h2 class="text-left mb-3 fw-bold">Lokasi</h2>
            <p class="text-muted mb-4">
                Lokasi Bisnis Unit Kami
            </p>
        </div>

        <div class="container position-relative">
            <!-- Titik Tanah Abang -->
            <div class="position-relative">
                <div id="map" style="height: 500px; width: 100%;"></div>

            </div>
        </div>
    </section>

    @endsection

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Inisialisasi peta
            var map = L.map('map').setView([-6.200000, 106.816666], 10); // Contoh: Jakarta

            // Tambahkan tile layer (OpenStreetMap)
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; OpenStreetMap contributors'
            }).addTo(map);

            // Data titik (bisa dari database via Blade atau API)
            var titik = <?php echo $lokasi; ?>;

            // Tambahkan marker satu per satu
            titik.forEach(function(t) {
                L.marker([t.lat, t.lng]).addTo(map).bindPopup(t.label);
            });

            titik.forEach(function(t) {
                var popupContent = `
        <div class="text-center">
            <strong>${t.label}</strong><br>
            <a href="https://www.google.com/maps?q=${t.lat},${t.lng}" target="_blank">Visit</a>
        </div>
    `;
                L.marker([t.lat, t.lng]).addTo(map).bindPopup(popupContent);
            });

        });
    </script>