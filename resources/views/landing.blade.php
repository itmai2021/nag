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
                    <img src="{{ asset('/assets/images/gedungMAIFix.png') }}"
                        class="hero-img"
                        alt="Slide 1">
                </picture>
                <!-- Text Overlay: Desktop -->
                <div class="carousel-caption text-start d-none d-md-block"
                    style="top: 45%; transform: translateY(-50%); left: 5%; right: auto;"
                    data-aos="fade" data-aos-once="false">
                    <h1 style="font-size: clamp(2rem, 4vw, 2.5rem); font-weight: bold; color: white; text-shadow: 2px 2px 6px rgba(0,0,0,0.6); margin: 0;">
                        Together <span>&nbsp;We Are</span> <span>&nbsp;Strong!</span>
                    </h1>
                </div>

                <!-- Text Overlay: Mobile -->
                <div class="carousel-caption text-start d-block d-md-none"
                    style="top: 45%; transform: translateY(-50%); left: 5%; right: auto;"
                    data-aos="fade" data-aos-once="false">
                    <h1 style="font-size: 1.8rem; font-weight: bold; color: white; text-align: left; text-shadow: 2px 2px 6px rgba(0,0,0,0.6); margin: 0; line-height: 1.4;">
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
        <h2 class="section__header">Sektor Bisnis</h2>
        <p class="section__description">
            Sektor Bisnis usaha utama kami dalam berbagai sektor industri.
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
<section class="section__container destination__container mt-5 d-none" id="automotive"
    style="margin-bottom: 20vh;">
    <h2 class="section__header mb-5 text-center">Automotive Trading</h2>

    <div class="text-left mb-4">
        <p class="mb-0 text-start" id="back-to-pilar" style="cursor: pointer; margin-left: 10vh;">
            <i class="ri-arrow-left-line"></i> Kembali
        </p>
    </div>
    <div class="container cont_sektor py-4">
        <div class="row justify-content-center g-4">
            @foreach ($automotive as $auto)
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                <div class="logo-item d-flex justify-content-center align-items-center" style="height: 120px;">
                    <img src="{{ asset('assets/file/logo/' . $auto->logo) }}"
                        alt="Logo {{ $auto->company_shortname }}"
                        class="img-fluid logo-click"
                        data-bs-toggle="modal"
                        data-bs-target="#imageModal{{ $auto->id }}"
                        style="cursor: pointer; max-height: 100px; object-fit: contain;">
                </div>

            </div>
            @endforeach
        </div>
    </div>

</section>

@foreach ($automotive as $auto)
@if($auto->company_shortname == 'TJHMG')
<div class="modal fade" id="imageModal{{ $auto->id }}" tabindex="-1"
    aria-labelledby="imageModalLabel{{ $auto->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content shadow-lg rounded-3">
            <!-- Modal Header -->
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold" id="imageModalLabel{{ $auto->id }}">
                    {{ $auto->company_name }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body p-0">
                <!-- Logo TJHMG - TETAP TERLIHAT -->
                <div class="text-center py-3" style="border-bottom: 1px solid #ddd;">
                    <div style="flex: 0 0 20%;">
                        <img src="{{ asset('assets/file/logo/' . $auto->logo) }}" alt="Logo"
                            class="img-fluid rounded shadow-sm"
                            style="max-height: 150px; object-fit: contain;">
                    </div>
                    <hr class="m-0">

                    <!-- Konten Scrollable -->
                    <div class="overflow-auto px-4 py-3"
                        style="max-height: 48vh; display: flex; flex-direction: column; gap: 20px;">

                        {{-- ATJ --}}
                        <div class="d-flex gap-3 align-items-start">
                            <div style="flex: 0 0 20%;">
                                <img src="{{ asset('assets/file/logo/' . $tjhmg['atj']->logo) }}" alt="Logo ATJ"
                                    style="max-width: 75vh; max-height: 75vh; object-fit: contain;" class="rounded shadow-sm">
                            </div>
                            <div style="flex: 1;">
                                <p class="text-muted mb-0" style="text-align: justify;">
                                    {{ $tjhmg['atj']->description }}
                                </p>
                                @if ($tjhmg['atj']->web_url)
                                <div class="text-end mt-2">
                                    <a href="{{ $tjhmg['atj']->web_url }}" target="_blank" class="text-decoration-none fw-semibold">
                                        Selengkapnya <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>

                        {{-- TJMA --}}
                        <div class="d-flex gap-4 align-items-start">
                            <div style="flex: 0 0 20%;">
                                <img src="{{ asset('assets/file/logo/' . $tjhmg['tjma']->logo) }}" alt="Logo TJMA"
                                    style="max-width: 75vh; max-height: 75vh; object-fit: contain;" class="rounded shadow-sm">
                            </div>
                            <div style="flex: 1;">
                                <p class="text-muted mb-0" style="text-align: justify;">
                                    {{ $tjhmg['tjma']->description }}
                                </p>
                                @if ($tjhmg['tjma']->web_url)
                                <div class="text-end mt-2">
                                    <a href="{{ $tjhmg['tjma']->web_url }}" target="_blank" class="text-decoration-none fw-semibold">
                                        Selengkapnya <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>

                        {{-- LGC --}}
                        <div class="d-flex gap-4 align-items-start">
                            <div style="flex: 0 0 20%;">
                                <img src="{{ asset('assets/file/logo/' . $tjhmg['lgc']->logo) }}" alt="Logo LGC"
                                    style="max-width: 75vh; max-height: 75vh; object-fit: contain;" class="rounded shadow-sm">
                            </div>
                            <div style="flex: 1;">
                                <p class="text-muted mb-0" style="text-align: justify;">
                                    {{ $tjhmg['lgc']->description }}
                                </p>
                                @if ($tjhmg['lgc']->web_url)
                                <div class="text-end mt-2">
                                    <a href="{{ $tjhmg['lgc']->web_url }}" target="_blank" class="text-decoration-none fw-semibold">
                                        Selengkapnya <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>

                        {{-- ATJA --}}
                        <div class="d-flex gap-4 align-items-start">
                            <div style="flex: 0 0 20%;">
                                <img src="{{ asset('assets/file/logo/' . $tjhmg['atja']->logo) }}" alt="Logo ATJA"
                                    style="max-width: 75vh; max-height: 75vh; object-fit: contain;" class="rounded shadow-sm">
                            </div>
                            <div style="flex: 1;">
                                <p class="text-muted mb-0" style="text-align: justify;">
                                    {{ $tjhmg['atja']->description }}
                                </p>
                                @if ($tjhmg['atja']->web_url)
                                <div class="text-end mt-2">
                                    <a href="{{ $tjhmg['atja']->web_url }}" target="_blank" class="text-decoration-none fw-semibold">
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
    </div>
    @endif
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
                            @if($auto->company_shortname == 'AAT')
                            <div class="mt-4">
                                <div class="row row-cols-1 justify-content-end">
                                    <div class="col text-end">
                                        <div class="card shadow-sm">
                                            <div class="card-body p-0">
                                                <a href="https://armadaautotara.co.id/" target="_blank" class="text-decoration-none fw-semibold">
                                                    AAT Daihatsu
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col text-end">
                                        <div class="card shadow-sm">
                                            <div class="card-body p-0">
                                                <a href="https://daihatsuautotaratangerang.co.id/" target="_blank" class="text-decoration-none fw-semibold">
                                                    AAT Daihatsu Cikokol
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col text-end">
                                        <div class="card shadow-sm">
                                            <div class="card-body p-0">
                                                <a href="https://daihatsuautotaradepok.co.id/" target="_blank" class="text-decoration-none fw-semibold">
                                                    AAT Daihatsu Depok
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col text-end">
                                        <div class="card shadow-sm">
                                            <div class="card-body p-0">
                                                <a href="https://daihatsuautotarasawahbesar.co.id/" target="_blank" class="text-decoration-none fw-semibold">
                                                    AAT Daihatsu Sawah Besar
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col text-end">
                                        <div class="card shadow-sm">
                                            <div class="card-body p-0">
                                                <a href="https://daihatsuautotarakalimalang.co.id/" target="_blank" class="text-decoration-none fw-semibold">
                                                    AAT Daihatsu Kalimalang
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col text-end">
                                        <div class="card shadow-sm">
                                            <div class="card-body p-0">
                                                <a href="https://daihatsuautotarakstubun.co.id/" target="_blank" class="text-decoration-none fw-semibold">
                                                    AAT Daihatsu KS Tubun
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col text-end">
                                        <div class="card shadow-sm">
                                            <div class="card-body p-0">
                                                <a href="https://autotaraisuzu.co.id/" target="_blank" class="text-decoration-none fw-semibold">
                                                    AAT Isuzu
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @elseif($auto->company_shortname == 'AMJA')
                            <div class="mt-4">
                                <div class="row row-cols-1 justify-content-end">
                                    <div class="col text-end">
                                        <div class="card shadow-sm">
                                            <div class="card-body p-0">
                                                <a href="https://www.mazdasemarang.com" target="_blank" class="text-decoration-none fw-semibold">
                                                    Mazda Semarang
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col text-end">
                                        <div class="card shadow-sm">
                                            <div class="card-body p-0">
                                                <a href="https://www.mazdasoloofficial.com" target="_blank" class="text-decoration-none fw-semibold">
                                                    Mazda Solo
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col text-end">
                                        <div class="card shadow-sm">
                                            <div class="card-body p-0">
                                                <a href="https://www.mazdayogyakarta.com" target="_blank" class="text-decoration-none fw-semibold">
                                                    Mazda Yogyakarta
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            @if ($auto->web_url)
                            <div class="text-end mt-3">
                                <a href="{{ $auto->web_url }}" target="_blank"
                                    class="text-decoration-none fw-semibold">
                                    Selengkapnya <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                            @endif
                            @endif

                        </div>
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
    <div class="container cont_sektor py-4">
        <div class="row justify-content-center g-4">
            @foreach ($manufacture as $manuf)
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                <div class="logo-item d-flex justify-content-center align-items-center" style="height: 120px;">
                    <img src="{{ asset('assets/file/logo/' . $manuf->logo) }}"
                        alt="Logo {{ $manuf->company_shortname }}"
                        class="img-fluid logo-click"
                        data-bs-toggle="modal"
                        data-bs-target="#imageModal2{{ $manuf->id }}"
                        style="cursor: pointer; max-height: 100px; object-fit: contain;">
                </div>
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
    <div class="container cont_sektor py-4">
        <div class="row justify-content-center g-4">
            @foreach ($finance as $fn)
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                <div class="logo-item d-flex justify-content-center align-items-center" style="height: 120px;">
                    <img src="{{ asset('assets/file/logo/' . $fn->logo) }}"
                        alt="Logo {{ $fn->company_shortname }}"
                        class="img-fluid logo-click"
                        data-bs-toggle="modal"
                        data-bs-target="#imageModal3{{ $fn->id }}"
                        style="cursor: pointer; max-height: 100px; object-fit: contain;">
                </div>
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
    <div class="container cont_sektor py-4">
        <div class="row justify-content-center g-4">
            @foreach ($others as $other)
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                <div class="logo-item d-flex justify-content-center align-items-center" style="height: 120px;">
                    <img src="{{ asset('assets/file/logo/' . $other->logo) }}"
                        alt="Logo {{ $other->company_shortname }}"
                        class="img-fluid logo-click"
                        data-bs-toggle="modal"
                        data-bs-target="#imageModal4{{ $other->id }}"
                        style="cursor: pointer; max-height: 100px; object-fit: contain;">
                </div>
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
<section class="container py-5" data-aos="fade-up">
    <h2 class="text-left mb-3 fw-bold" data-aos="fade-up" data-aos-delay="100">Berita</h2>
    <div class="d-flex flex-column flex-md-row justify-content-between text-muted mb-5" data-aos="fade-up" data-aos-delay="200">
        <p class="mb-2 mb-md-0">
            Update terbaru mengenai aktivitas, berita, dan informasi menarik dari kami.
        </p>
        <p class="mb-0 text-end" style="cursor:pointer;">
            <a href="{{ route('news') }}" style="text-decoration: none; color: #343a40;">
                Semua Berita <i class="ri-arrow-right-line"></i>
            </a>
        </p>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($data['news'] as $index => $a)
        <div class="col" data-aos="fade-up" data-aos-delay="{{ 100 * ($index + 1) }}">
            <div class="card card-trans h-100 shadow-sm border-0 rounded-4 overflow-hidden">
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

<section class="container-fluid py-5" style="background-color: white;" id="location">
    <div class="container mb-4 p-0">
        <h2 class="text-left mb-3 fw-bold">Lokasi</h2>
        <p class="text-muted mb-4">
            Lokasi Bisnis Unit Kami
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
                    label: 'Automotive Trading'
                },
                {
                    color: '#003366',
                    label: 'Manufacture'
                },
                {
                    color: '#007F5C',
                    label: 'Finance'
                },
                {
                    color: '#FF8C42',
                    label: 'Others'
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