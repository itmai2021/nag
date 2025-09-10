@extends('layouts.app_landing')
@section('content')
<!-- Hero Section (Carousel) -->
<section id="Home" class="p-0 position-relative">
    <div id="carouselHeader" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <picture>
                    <!-- untuk mobile -->
                    <source media="(max-width: 768px)" srcset="{{ asset('/assets/images/gedung_mai_mobile.png') }}">

                    <!-- default (desktop) -->
                    <img src="{{ asset('/assets/images/gedungMAI.jpg') }}"
                        class="hero-img"
                        alt="Slide 1">
                </picture>
                <!-- Text Overlay: Desktop -->
                <div class="carousel-caption text-start d-none d-md-block"
                    style="top: 45%; transform: translateY(-50%); left: 5%; right: auto;"
                    data-aos="fade" data-aos-once="false">
                    <!-- <h1 style="font-size: clamp(2rem, 4vw, 2.5rem); font-weight: bold; color: white; text-shadow: 2px 2px 6px rgba(0,0,0,0.6); margin: 0;">
                        Together <span>&nbsp;We Are</span> <span>&nbsp;Strong!</span>
                    </h1> -->
                    <h1 class="russo-one-font" style="font-size:clamp(2rem, 4vw, 2.5rem); font-weight: bold; color: white; text-align: left; text-shadow: 2px 2px 6px rgba(0,0,0,0.6); margin: 0; line-height: 1.4;">
                        Together We Are Strong!
                    </h1>
                </div>

                <!-- Text Overlay: Mobile -->
                <div class="carousel-caption text-start d-block d-md-none"
                    style="top: 45%; transform: translateY(-50%); left: 5%; right: auto;"
                    data-aos="fade" data-aos-once="false">
                    <h1 class="russo-one-font" style="font-size: 1.8rem; font-weight: bold; color: white; text-align: left; text-shadow: 2px 2px 6px rgba(0,0,0,0.6); margin: 0; line-height: 1.4;">
                        Together<br>
                        We Are<br>
                        Strong!
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="background-color: white;" id="pilar">
    <div class="section__container destination__container">
        <h2 class="section__header">{{ __('messages.landing.sektor') }}</h2>
        <p class="section__description mr-0">
            {{ __('messages.landing.deskripsi') }}
        </p>
        <div class="goal-grid">
            <div class="goal-card" id="open-automotive" data-aos="fade-right">
                <img src="{{ asset('/assets/images/1.png') }}" alt="Goal 1" class="goal-img">
                <div class="goal-text">
                    <h4 class="text-center">Automotive Trading</h4>
                </div>
            </div>

            <div class="goal-card" id="open-manufacture" data-aos="fade-left" data-aos-delay="100">
                <img src="{{ asset('/assets/images/2.png') }}" alt="Goal 2" class="goal-img">
                <div class="goal-text">
                    <h4 class="text-center">Manufacture</h4>
                </div>
            </div>

            <div class="goal-card" id="open-finance" data-aos="fade-right" data-aos-delay="200">
                <img src="{{ asset('/assets/images/3.png') }}" alt="Goal 4" class="goal-img">
                <div class="goal-text">
                    <h4 class="text-center">Financial</h4>
                </div>
            </div>

            <div class="goal-card" id="open-other" data-aos="fade-left" data-aos-delay="300">
                <img src="{{ asset('/assets/images/4.png') }}" alt="Goal 4" class="goal-img">
                <div class="goal-text">
                    <h4 class="text-center">Others</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AUTOMOTIVE -->
@include('sektor_bisnis.automotive_trading')
<!-- MANUFACTURE -->
@include('sektor_bisnis.manufacture')
<!-- FINANCE -->
@include('sektor_bisnis.finance')

<!-- OTHER -->
@include('sektor_bisnis.others')

<!-- Berita -->
<section class="container py-5" data-aos="fade-up">
    <div class="d-flex flex-column flex-md-row justify-content-between text-muted mb-2" data-aos="fade-up" data-aos-delay="200">
        <h2 class="text-left mb-0 fw-bold">{{ __('messages.landing.berita') }}</h2>

    </div>
    @if(isset($data['news'][0]))
    @php
    $a = $data['news'][0]; // hanya ambil berita pertama
    \Carbon\Carbon::setLocale(app()->getLocale());
    @endphp
    <div class="row g-4 align-items-center mt-1">
        <!-- Bagian Gambar (8 kolom) -->
        <div class="col-lg-8" data-aos="fade-right" data-aos-delay="100">
            <div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow-sm">
                <img src="{{ asset('assets/file/news/' . $a->image) }}"
                    class="w-100 h-100"
                    style="object-fit: cover;"
                    alt="News Image">
            </div>

        </div>

        <!-- Bagian Teks (4 kolom) -->
        <div class="col-lg-4" data-aos="fade-left" data-aos-delay="200">
            <div class="d-flex flex-column h-100">
                <p class="text-muted mb-3 fw-bold">
                    {{ \Carbon\Carbon::parse($a->publication_date)->translatedFormat('l, d F Y') }}
                </p>
                <h3 class="fw-bold">{{ $a->subject }}</h3>
                <p class="text-muted mb-3">
                    {{ \Illuminate\Support\Str::words(strip_tags($a->description), 22, '...') }}
                </p>

                <a href="{{ route('news.show', $a->id) }}" style="background-color: #031843;color:white !important"
                    class="btn rounded-pill mt-auto align-self-start">
                    {{ __('messages.landing.selengkapnya') }} <i class="ri-arrow-right-line"></i>
                </a>
            </div>
        </div>
    </div>
    @endif
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-3">
        @foreach ($data['news'] as $index => $a)
        <div class="col" data-aos="fade-up" data-aos-delay="{{ 100 * ($index + 1) }}">
            <div class="card card-trans h-100 shadow-sm border-0 rounded-4 overflow-hidden">

                <!-- Bungkus gambar dengan ratio -->
                <div class="ratio ratio-16x9">
                    <img src="{{ asset('assets/file/news/' . $a->image) }}"
                        class="w-100 h-100"
                        style="object-fit: cover;"
                        alt="News Image">
                </div>

                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $a->subject }}</h5>

                    @php
                    \Carbon\Carbon::setLocale(app()->getLocale());
                    @endphp

                    <p class="text-muted">
                        {{ \Carbon\Carbon::parse($a->publication_date)->translatedFormat('l, d F Y') }}
                    </p>

                    <a href="{{ route('news.show', $a->id) }}"
                        class="text-dark text-decoration-none fw-medium mt-auto">
                        {{ __('messages.landing.selengkapnya') }} <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Tombol Selengkapnya di bawah card, center -->
    <div class="d-flex justify-content-center mt-4">
        <a href="{{ route('news') }}"
            style="background-color: #031843; color:white !important"
            class="btn rounded-pill px-4">
            {{ __('messages.landing.semua_berita') }} <i class="ri-arrow-right-line"></i>
        </a>
    </div>

</section>



<section class="container-fluid py-5" style="background-color: white;" id="location">
    <div class="container mb-4 p-0">
        <h2 class="text-left mb-3 fw-bold">Lokasi</h2>
        <p class="text-muted mb-4">
            Lokasi Unit Bisnis Kami
        </p>
    </div>

    <div class="container position-relative p-0">
        <!-- Titik Tanah Abang -->
        <div class="position-relative">
            <div id="map" style="height: 500px; width: 100%;border-radius:15px"></div>

        </div>
    </div>
</section>
@endsection

@section('script')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        AOS.init({
            once: false, // biar bisa bulak balik
        });

        var map = L.map('map').setView([-2.0, 115.816666], 5);
        var legend = L.control({
            position: 'bottomleft'
        });

        legend.onAdd = function(map) {
            var div = L.DomUtil.create('div', 'info legend');

            // Contoh data legend (warna dan label)
            var legendData = [{
                    color: '#C00000',
                    label: 'Automotive Trading : 103 cabang'
                },
                {
                    color: '#003366',
                    label: 'Manufacture : 9 pabrik'
                },
                {
                    color: '#007F5C',
                    label: 'Finance : 58 cabang'
                },
                {
                    color: '#FF8C42',
                    label: 'Others : 16 cabang'
                },
            ];

            // Buat HTML-nya
            legendData.forEach(function(item) {
                div.innerHTML += `
            <div style="display: flex; align-items: center; margin-bottom: 5px;">
                <div style="
                    width: 12px;
                    height: 12px;
                    background-color: ${item.color};
                    border-radius: 50%;
                    margin-right: 8px;
                    border: 1px solid #000;
                "></div>
                <span style="font-size: 12px;">${item.label}</span>
            </div>
        `;
            });

            return div;
        };

        legend.addTo(map);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        var titik = <?php echo $lokasi; ?>;

        titik.forEach(function(t) {
            var pinIcon = L.divIcon({
                html: `
        <div style="
    position: relative;
    width: 30px;
    height: 30px;
">
    <div style="
        width: 25px;
        height: 25px;
        background-color: ${t.color}; /* Ganti dengan ${t.color} */
        border-radius: 50% 50% 50% 50%;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
    ">
        <!-- Lingkaran putih di tengah -->
        <div style="
            width: 8px;
            height: 8px;
            background-color: white;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        "></div>
    </div>

    <!-- Segitiga bawah -->
    <div style="
        position: absolute;
        top: 20px;
        left: 44%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-top: 15px solid ${t.color}; /* Ganti dengan ${t.color} */
    "></div>
</div>

        `,
                className: '', // hilangkan class default Leaflet
                iconSize: [20, 30],
                iconAnchor: [10, 30] // titik anchor di bawah segitiga
            });

            L.marker([t.lat, t.lng], {
                    icon: pinIcon
                })
                .addTo(map)
                .bindPopup(`<strong>${t.label}</strong><br><a href="${t.link}" target="_blank">Visit</a>`);
        });

    });
</script>
@endsection