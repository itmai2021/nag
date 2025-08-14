@extends('layouts.app_landing')
@section('content')
<!-- Hero Section (Carousel) -->
<section id="Home" class="p-0">
    <div id="carouselHeader" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="{{ asset('/assets/images/gedungMAIFix.png') }}"
                    class="d-block w-100"
                    alt="Slide 1"
                    style="object-fit: cover; object-position: top 20px; height: 700px;">
            </div>

        </div>
</section>
<section class="section__container destination__container mt-4 mb-5" id="pilar">
    <h2 class="section__header">Sektor Bisnis</h2>
    <p class="section__description">
        Sektor Bisnis usaha utama kami dalam berbagai sektor industri.
    </p>
    <div class="goal-grid">
        <div class="goal-card" id="open-automotive" data-aos="fade-up">
            <img src="{{ asset('/assets/images/1.png') }}" alt="Goal 1" class="goal-img">
            <div class="goal-text">
                <h4 class="text-center">Automotive Trading</h4>
            </div>
        </div>

        <div class="goal-card" id="open-manufacture" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('/assets/images/2.png') }}" alt="Goal 2" class="goal-img">
            <div class="goal-text">
                <h4 class="text-center">Manufacture</h4>
            </div>
        </div>

        <div class="goal-card" id="open-finance" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('/assets/images/3.png') }}" alt="Goal 4" class="goal-img">
            <div class="goal-text">
                <h4 class="text-center">Financial</h4>
            </div>
        </div>

        <div class="goal-card" id="open-other" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ asset('/assets/images/4.png') }}" alt="Goal 4" class="goal-img">
            <div class="goal-text">
                <h4 class="text-center">Others</h4>
            </div>
        </div>
    </div>
</section>



<!-- AUTOMOTIVE -->
<section class="section__container destination__container mt-5 d-none" id="automotive"
    style="margin-bottom: 20vh;">
    <h2 class="section__header mb-5 text-center">Automotive Trading</h2>

    <div class="text-left mb-4">
        <p class="mb-0 text-start" id="back-to-pilar" style="cursor: pointer; margin-left: 10vh;">
            <i class="ri-arrow-left-line"></i> Kembali
        </p>
    </div>
    <div class="container py-4" style=" margin-left: 11vh;">
        <div class="custom-grid justify-content-center">
            @foreach ($automotive as $auto)
            <div class="logo-item text-center">
                <img src="{{ asset('assets/file/logo/' . $auto->logo) }}"
                    alt="Logo {{ $auto->company_shortname }}" class="logo-click" data-bs-toggle="modal"
                    data-bs-target="#imageModal{{ $auto->id }}"
                    style="cursor: pointer; max-height: 100px;">
            </div>
            @endforeach
        </div>
    </div>
</section>

@foreach ($automotive as $auto)
<div class="modal fade" id="imageModal{{ $auto->id }}" tabindex="-1"
    aria-labelledby="imageModalLabel{{ $auto->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content shadow-lg rounded-3">
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold" id="imageModalLabel{{ $auto->id }}">
                    {{ $auto->company_name }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Tutup"></button>
            </div>
            <div class="modal-body"
                style="min-height: 250px; display: flex; align-items: center;justify-content: center;gap: 20px;">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('assets/file/logo/' . $auto->logo) }}" alt="Logo"
                            class="img-fluid rounded shadow-sm"
                            style="max-height: 200px; object-fit: contain;">
                    </div>
                    <!-- Deskripsi -->
                    <div class="col-md-8">
                        <p class="text-muted mb-0" style="text-align: justify;">
                            {{ $auto->description }}
                        </p>
                        @if ($auto->web_url)
                        <div class="text-end mt-3">
                            <a href="{{ $auto->web_url }}" target="_blank"
                                class="text-decoration-none fw-semibold">
                                Selengkapnya <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- MANUFACTURE -->
<section class="section__container destination__container mt-5 d-none" id="manufacture"
    style="margin-bottom: 20vh;">
    <h2 class="section__header mb-5 text-center">Manufacture</h2>
    <div class="text-left mb-4 ml-4">
        <p class="mb-0 text-start" id="back-to-pilar2" style="cursor: pointer;margin-left: 10vh;">
            <i class="ri-arrow-left-line"></i>Kembali
        </p>
    </div>
    <div class="container py-4" style=" margin-left: 11vh;">
        <div class="custom-grid justify-content-center">
            @foreach ($manufacture as $manuf)
            <div class="logo-item text-center">
                <img src="{{ asset('assets/file/logo/' . $manuf->logo) }}"
                    alt="Logo {{ $manuf->company_shortname }}" class="logo-click" data-bs-toggle="modal"
                    data-bs-target="#imageModal2{{ $manuf->id }}" data-id="{{ $manuf->id }}"
                    data-logo="{{ asset('assets/file/logo/' . $manuf->logo) }}"
                    style="cursor: pointer; max-height: 100px;">
            </div>
            @endforeach
        </div>
    </div>
</section>
@foreach ($manufacture as $manuf)
<div class="modal fade" id="imageModal2{{ $manuf->id }}" tabindex="-1"
    aria-labelledby="imageModalLabel{{ $manuf->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content shadow-lg rounded-3">
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold" id="imageModalLabel{{ $manuf->id }}">
                    {{ $manuf->company_name }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Tutup"></button>
            </div>
            <div class="modal-body"
                style="min-height: 250px; display: flex; align-items: center;justify-content: center;gap: 20px;">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('assets/file/logo/' . $manuf->logo) }}" alt="Logo"
                            class="img-fluid rounded shadow-sm"
                            style="max-height: 200px; object-fit: contain;">
                    </div>
                    <!-- Deskripsi -->
                    <div class="col-md-8">
                        <p class="text-muted mb-0" style="text-align: justify;">
                            {{ $manuf->description }}
                        </p>
                        @if ($manuf->web_url)
                        <div class="text-end mt-3">
                            <a href="{{ $manuf->web_url }}" target="_blank"
                                class="text-decoration-none fw-semibold">
                                Selengkapnya <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- FINANCE -->
<section class="section__container destination__container mt-5 d-none" id="finance"
    style="margin-bottom: 20vh;">
    <h2 class="section__header mb-5 text-center">Financial</h2>
    <div class="text-left mb-4 ml-4">
        <p class="mb-0 text-start" id="back-to-pilar3" style="cursor: pointer;margin-left: 10vh;">
            <i class="ri-arrow-left-line"></i>Kembali
        </p>
    </div>
    <div class="container py-4" style=" margin-left: 11vh;">
        <div class="custom-grid justify-content-center">
            @foreach ($finance as $fn)
            <div class="logo-item text-center">
                <img src="{{ asset('assets/file/logo/' . $fn->logo) }}"
                    alt="Logo {{ $fn->company_shortname }}" class="logo-click" data-bs-toggle="modal"
                    data-bs-target="#imageModal3{{ $fn->id }}" data-id="{{ $fn->id }}"
                    data-logo="{{ asset('assets/file/logo/' . $fn->logo) }}"
                    style="cursor: pointer; max-height: 100px;">
            </div>
            @endforeach
        </div>
    </div>
</section>
@foreach ($finance as $fnc)
<div class="modal fade" id="imageModal3{{ $fnc->id }}" tabindex="-1"
    aria-labelledby="imageModalLabel{{ $fnc->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content shadow-lg rounded-3">
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold" id="imageModalLabel{{ $fnc->id }}">
                    {{ $fnc->company_name }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Tutup"></button>
            </div>
            <div class="modal-body"
                style="min-height: 250px; display: flex; align-items: center;justify-content: center;gap: 20px;">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('assets/file/logo/' . $fnc->logo) }}" alt="Logo"
                            class="img-fluid rounded shadow-sm"
                            style="max-height: 200px; object-fit: contain;">
                    </div>
                    <!-- Deskripsi -->
                    <div class="col-md-8">
                        <p class="text-muted mb-0" style="text-align: justify;">
                            {{ $fnc->description }}
                        </p>
                        @if ($fnc->web_url)
                        <div class="text-end mt-3">
                            <a href="{{ $fnc->web_url }}" target="_blank"
                                class="text-decoration-none fw-semibold">
                                Selengkapnya <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- OTHER -->
<section class="section__container destination__container mt-5 d-none" id="other"
    style="margin-bottom: 20vh;">
    <h2 class="section__header mb-5 text-center">Others</h2>
    <div class="text-left mb-4 ml-4">
        <p class="mb-0 text-start" id="back-to-pilar4" style="cursor: pointer;margin-left: 10vh;">
            <i class="ri-arrow-left-line"></i>Kembali
        </p>
    </div>
    <div class="container py-4" style=" margin-left: 11vh;">
        <div class="custom-grid justify-content-center">
            @foreach ($others as $other)
            <div class="logo-item text-center">
                <img src="{{ asset('assets/file/logo/' . $other->logo) }}"
                    alt="Logo {{ $other->company_shortname }}" class="logo-click" data-bs-toggle="modal"
                    data-bs-target="#imageModal4{{ $other->id }}" data-id="{{ $other->id }}"
                    data-logo="{{ asset('assets/file/logo/' . $other->logo) }}"
                    style="cursor: pointer; max-height: 100px;">
            </div>
            @endforeach
        </div>
    </div>
</section>
@foreach ($others as $other)
<div class="modal fade" id="imageModal4{{ $other->id }}" tabindex="-1"
    aria-labelledby="imageModalLabel{{ $other->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content shadow-lg rounded-3">
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold" id="imageModalLabel{{ $other->id }}">
                    {{ $other->company_name }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Tutup"></button>
            </div>
            <div class="modal-body"
                style="min-height: 250px; display: flex; align-items: center;justify-content: center;gap: 20px;">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('assets/file/logo/' . $other->logo) }}" alt="Logo"
                            class="img-fluid rounded shadow-sm"
                            style="max-height: 200px; object-fit: contain;">
                    </div>
                    <!-- Deskripsi -->
                    <div class="col-md-8">
                        <p class="text-muted mb-0" style="text-align: justify;">
                            {{ $other->description }}
                        </p>
                        @if ($other->web_url)
                        <div class="text-end mt-3">
                            <a href="{{ $other->web_url }}" target="_blank"
                                class="text-decoration-none fw-semibold">
                                Selengkapnya <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
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
                <a href="{{ route('news') }}" style="text-decoration: none; color: #343a40;">Semua Berita <i
                        class="ri-arrow-right-line"></i></a>
            </p>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($data['news'] as $a)
            <!-- card 1 -->
            <div class="col">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <img src="{{ asset('assets/file/news/' . $a->image) }}" class="card-img-top news-img"
                        alt="Berita 1">

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $a->subject }}</h5>
                        <p class="card-text text-muted">
                            {{ \Carbon\Carbon::parse($a->publication_date)->subDays(30)->locale('id')->translatedFormat('l, d F Y') }}
                        </p>
                        <a href="{{ route('news.show', $a->id) }}"
                            class="text-dark text-decoration-none fw-medium mt-auto">
                            Selengkapnya <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
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
            <div id="map" style="height: 500px; width: 100%;border-radius:15px"></div>

        </div>
    </div>
</section>
@endsection

@section('script')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var map = L.map('map').setView([-6.2, 106.816666], 10);
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