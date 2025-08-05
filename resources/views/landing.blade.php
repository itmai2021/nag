    @extends('layouts.app_landing')
    @section('content')
    <!-- Hero Section (Carousel) -->
    <section id="Home" class="p-0">
        <div id="carouselHeader" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="{{ asset('/assets/images/gedung_mai.png') }}" class="d-block w-100" alt="Slide 1">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <p class="fw-bold text-uppercase">Mekar Armada Investama</p>
                        <!-- <h1 class="display-5 fw-bold">Mekar Armada Investama</h1> -->
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="{{ asset('/assets/images/gedung_bra.jpg') }}" class="d-block w-100" alt="Slide 2">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <p class="fw-bold text-uppercase">Bumen Redja Abadi</p>
                        <!-- <h1 class="display-5 fw-semibold">Bumen Redja Abadi</h1> -->
                    </div>
                </div>
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



    <!-- <section class="section__container destination__container" id="about">
        <h2 class="section__header">Berita</h2>
        <p class="section__description">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, ipsa.
        </p>

        <div class="position-relative d-flex align-items-center">

            <button
                id="scrollLeftBtn"
                class="scroll-arrow btn btn-light rounded-circle shadow position-absolute start-0"
                style="z-index: 10; left: -25px;">
                &#8592;
            </button>

            <div id="scrollContainer" class="destination__scroll-wrapper">
                <div class="destination__grid scrollable-cards">
                    @for ($i = 0; $i < 2; $i++)
                        <div class="destination__card">
                        <img src="{{ asset('/assets/images/card.jpg') }}" alt="destination" />
                        <div class="destination__card__details">
                            <div>
                                <h4>Sacred Calm at Badrinath Temple.</h4>
                                <p>Badrinath, Uttarakhand, India</p>
                            </div>
                        </div>
                </div>
                <div class="destination__card">
                    <img src="{{ asset('/assets/images/card2.jpg') }}" alt="destination" />
                    <div class="destination__card__details">
                        <div>
                            <h4>Divine Majesty at Jagannath Temple.</h4>
                            <p>Puri, Odisha, India</p>
                        </div>
                    </div>
                </div>
                <div class="destination__card">
                    <img src="{{ asset('/assets/images/card3.webp') }}" alt="destination" />
                    <div class="destination__card__details">
                        <div>
                            <h4>Spiritual Serenity at Neem Karoli Temple.</h4>
                            <p>Dehradun, India</p>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>

        <button
            id="scrollRightBtn"
            class="scroll-arrow btn btn-light rounded-circle shadow position-absolute end-0"
            style="z-index: 10; right: -25px;">
            &#8594;
        </button>
        </div>
    </section> -->

    <section class="section__container destination__container mt-4 mb-5" id="pilar">
        <h2 class="section__header">Sektor Bisnis</h2>
        <p class="section__description">
            Sektor Bisnis usaha utama kami dalam berbagai sektor industri.
        </p>
        <div class="grid-wrapper">
            <div class="grid-no-gap">
                <div class="grid-item automotive" id="open-automotive">
                    <i class="ri-roadster-fill icon-center"></i>
                    <div class="label">AUTOMOTIVE TRADING</div>
                </div>
                <div class="grid-item manufacture" id="open-manufacture">
                    <i class="ri-building-4-fill icon-center"></i>
                    <div class="label">MANUFACTURE</div>
                </div>
                <div class="grid-item finance" id="open-finance">
                    <i class="ri-bank-card-fill icon-center"></i>
                    <div class="label">FINANCIAL SERVICES</div>
                </div>
                <div class="grid-item others" id="open-other">
                    <i class="ri-service-fill icon-center"></i>
                    <div class="label">OTHER SERVICES</div>
                </div>
            </div>


            <div class="circle-container">
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
            </div>
        </div>
    </section>

    <!-- AUTOMOTIVE -->
    <section class="section__container destination__container mt-5 d-none" id="automotive" style="margin-bottom: 20vh;">
        <h2 class="section__header mb-5 text-center">Automotive Trading</h2>
        <div class="text-left mb-4 ml-4">
            <p class="mb-0 text-start" id="back-to-pilar" style="cursor: pointer;margin-left: 10vh;">
                <i class="ri-arrow-left-line"></i>Back
            </p>
        </div>
        <div class="timeline-container d-flex flex-wrap justify-content-center gap-5 mb-4">
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-primary text-white">1982</div>
                <div class="col">
                    <img src="/assets/images/bra-logo.jpg" alt="Berita 1"
                        style="max-width: 80px; height: auto; display: block; margin: 0 auto; cursor:pointer"
                        data-bs-toggle="modal" data-bs-target="#imageModal">
                </div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-danger text-white">1983</div>
                <div class="col mt-4">
                    <img src="/assets/images/TM.png" alt="Berita 1"
                        style="max-width: 80px; height: auto; display: block; margin: 0 auto;cursor:pointer" data-bs-toggle="modal" data-bs-target="#imageModal2">
                </div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-success text-white">1988</div>
                <div class="col mt-5">
                    <img src="/assets/images/AIM.png" alt="Berita 1"
                        style="max-width: 80px; height: auto; display: block; margin: 0 auto;">
                </div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-warning text-white">1994</div>
                <div class="col mt-2">
                    <img src="/assets/images/aat.jpg" alt="Berita 1"
                        style="max-width: 80px; height: auto; display: block; margin: 0 auto;">
                </div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-info text-white">1995</div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-primary text-white">1996</div>
            </div>
        </div>
        <div class="timeline-container d-flex flex-wrap justify-content-center gap-5">
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-danger text-white">2009</div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-primary text-white">2007</div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-info text-white">2003</div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-warning text-white">2000</div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-success text-white">1998</div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-danger text-white">1997</div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Bumen Redja Abadi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body text-center">
                    <section class="section__container showcase__container" id="package">
                        <div class="showcase__image">
                            <img src="{{asset('/assets/images/bra-logo.jpg')}}" alt="showcase" />
                        </div>
                        <div class="showcase__content">
                            <p style="text-align: left;">
                                PT Bumen Redja Abadi adalah perusahaan otomotif yang berdiri pada tahun 1981 yang berfokus pada penjualan, distribusi, serta layanan purna jual kendaraan Mitsubishi di Indonesia.
                            </p>
                            <div class="showcase__btn">
                                <button class="btn" style="margin-left:12rem">
                                    <a href="https://bumenredjaabadi.co.id/"></a>
                                    Read More
                                    <span><i class="ri-arrow-right-line"></i></span>
                                </button>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="imageModal2" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Tunas Mobil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body text-center">
                    <section class="section__container showcase__container" id="package">
                        <div class="showcase__image">
                            <img src="{{asset('/assets/images/TM.png')}}" alt="showcase" />
                        </div>
                        <div class="showcase__content">
                            <p style="text-align: left;">
                                PT Tunas Mobil adalah sebuah perusahaan yang bergerak di bidang otomotif. Menjalankan usahanya sejak tahun 1988. PT Tunas Mobil merupakan Dealer Resmi mobil Honda yang yang sudah memenuhi standar untuk 3S : Sales, Service dan Sparepart.
                            </p>
                            <div class="showcase__btn">
                                <button class="btn" style="margin-left:12rem">
                                    Read More
                                    <span><i class="ri-arrow-right-line"></i></span>
                                </button>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!-- MANUFACTURE -->
    <section class="section__container destination__container mt-5 d-none" id="manufacture" style="margin-bottom: 20vh;">
        <h2 class="section__header mb-5 text-center">Manufacture</h2>
        <div class="text-left mb-4 ml-4">
            <p class="mb-0 text-start" id="back-to-pilar2" style="cursor: pointer;margin-left: 10vh;">
                <i class="ri-arrow-left-line"></i>Back
            </p>
        </div>
        <div class="timeline-container d-flex flex-wrap justify-content-center gap-5 mb-4">
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-primary text-white">1982</div>
                <div class="col">
                    <img src="/assets/images/bra-logo.jpg" alt="Berita 1"
                        style="max-width: 80px; height: auto; display: block; margin: 0 auto;">
                </div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-danger text-white">1983</div>
                <div class="col mt-4">
                    <img src="/assets/images/TM.png" alt="Berita 1"
                        style="max-width: 80px; height: auto; display: block; margin: 0 auto;">
                </div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-success text-white">1988</div>
                <div class="col mt-5">
                    <img src="/assets/images/AIM.png" alt="Berita 1"
                        style="max-width: 80px; height: auto; display: block; margin: 0 auto;">
                </div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-warning text-white">1994</div>
                <div class="col mt-2">
                    <img src="/assets/images/aat.jpg" alt="Berita 1"
                        style="max-width: 80px; height: auto; display: block; margin: 0 auto;">
                </div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-info text-white">1995</div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-primary text-white">1996</div>
            </div>
        </div>
        <div class="timeline-container d-flex flex-wrap justify-content-center gap-5">
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-danger text-white">2009</div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-primary text-white">2007</div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-info text-white">2003</div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-warning text-white">2000</div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-success text-white">1998</div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-danger text-white">1997</div>
            </div>
        </div>
    </section>
    <!-- FINANCE -->
    <section class="section__container destination__container mt-5 d-none" id="finance" style="margin-bottom: 20vh;">
        <h2 class="section__header mb-5 text-center">Financial Services</h2>
        <div class="text-left mb-4 ml-4">
            <p class="mb-0 text-start" id="back-to-pilar3" style="cursor: pointer;margin-left: 10vh;">
                <i class="ri-arrow-left-line"></i>Back
            </p>
        </div>
        <div class="timeline-container d-flex flex-wrap justify-content-center gap-5 mb-4">
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-primary text-white">1982</div>
                <div class="col">
                    <img src="/assets/images/bra-logo.jpg" alt="Berita 1"
                        style="max-width: 80px; height: auto; display: block; margin: 0 auto;">
                </div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-danger text-white">1983</div>
                <div class="col mt-4">
                    <img src="/assets/images/TM.png" alt="Berita 1"
                        style="max-width: 80px; height: auto; display: block; margin: 0 auto;">
                </div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-success text-white">1988</div>
                <div class="col mt-5">
                    <img src="/assets/images/AIM.png" alt="Berita 1"
                        style="max-width: 80px; height: auto; display: block; margin: 0 auto;">
                </div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-warning text-white">1994</div>
                <div class="col mt-2">
                    <img src="/assets/images/aat.jpg" alt="Berita 1"
                        style="max-width: 80px; height: auto; display: block; margin: 0 auto;">
                </div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-info text-white">1995</div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-primary text-white">1996</div>
            </div>
        </div>
        <div class="timeline-container d-flex flex-wrap justify-content-center gap-5">
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-danger text-white">2009</div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-primary text-white">2007</div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-info text-white">2003</div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-warning text-white">2000</div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-success text-white">1998</div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-danger text-white">1997</div>
            </div>
        </div>
    </section>

    <!-- OTHER -->
    <section class="section__container destination__container mt-5 d-none" id="other" style="margin-bottom: 20vh;">
        <h2 class="section__header mb-5 text-center">Other Services</h2>
        <div class="text-left mb-4 ml-4">
            <p class="mb-0 text-start" id="back-to-pilar4" style="cursor: pointer;margin-left: 10vh;">
                <i class="ri-arrow-left-line"></i>Back
            </p>
        </div>
        <div class="timeline-container d-flex flex-wrap justify-content-center gap-5 mb-4">
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-primary text-white">1982</div>
                <div class="col">
                    <img src="/assets/images/bra-logo.jpg" alt="Berita 1"
                        style="max-width: 80px; height: auto; display: block; margin: 0 auto;">
                </div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-danger text-white">1983</div>
                <div class="col mt-4">
                    <img src="/assets/images/TM.png" alt="Berita 1"
                        style="max-width: 80px; height: auto; display: block; margin: 0 auto;">
                </div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-success text-white">1988</div>
                <div class="col mt-5">
                    <img src="/assets/images/AIM.png" alt="Berita 1"
                        style="max-width: 80px; height: auto; display: block; margin: 0 auto;">
                </div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-warning text-white">1994</div>
                <div class="col mt-2">
                    <img src="/assets/images/aat.jpg" alt="Berita 1"
                        style="max-width: 80px; height: auto; display: block; margin: 0 auto;">
                </div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-info text-white">1995</div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-primary text-white">1996</div>
            </div>
        </div>
        <div class="timeline-container d-flex flex-wrap justify-content-center gap-5">
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-danger text-white">2009</div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-primary text-white">2007</div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-info text-white">2003</div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-warning text-white">2000</div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-success text-white">1998</div>
            </div>
            <div class="timeline-block text-center">
                <div class="timeline-circle bg-danger text-white">1997</div>
            </div>
        </div>
    </section>


    <!-- Berita -->
    <div style="background-color: #f5f5f5;padding-bottom:10vh"> <!-- Ganti warna sesuai keinginan -->
        <section class="container py-5" id="news">
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
                        <div class="card-body">
                            <h5 class="card-title">Pembangunan Gedung Baru Dimulai</h5>
                            <p class="card-text text-muted">30 Juli 2025</p>
                            <a href="{{route('news_detail')}}" style="text-decoration: none; color: #343a40;font-weight:500">Read More <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>

                <!-- card 2 -->
                <div class="col">
                    <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                        <img src="/assets/images/card2.jpg" class="card-img-top news-img" alt="Berita 2">
                        <div class="card-body">
                            <h5 class="card-title">Kegiatan Bakti Sosial di Desa Cibuntu</h5>
                            <p class="card-text text-muted">Senin, 28 Juli 2025</p>
                            <a href="{{route('news_detail')}}" style="text-decoration: none; color: #343a40;font-weight:500">Read More <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>

                <!-- card 3 -->
                <div class="col">
                    <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                        <img src="/assets/images/card3.webp" class="card-img-top news-img" alt="Berita 3">
                        <div class="card-body">
                            <h5 class="card-title">Pelatihan Kewirausahaan untuk Remaja</h5>
                            <p class="card-text text-muted">Jumat, 25 Juli 2025</p>
                            <a href="{{route('news_detail')}}" style="text-decoration: none; color: #343a40;font-weight:500">Read More <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- <section class="container-fluid py-5" id="location">
        <div class="container mb-4">
            <h2 class="text-left mb-3 fw-bold">LOCATION</h2>
            <p class="text-muted mb-4">
                Lokasi Head Office bisnis unit kami
            </p>
        </div>

        <div class="container px-3">
            <div class="ratio ratio-16x9 rounded overflow-hidden shadow">
                <iframe
                    class="w-100 h-100 border-0"
                    src="https://www.google.com/maps/d/embed?mid=1eTcaRB8-9AdtXlDKo4zzJ_6WH2tmyu4&ehbc=2E312F"
                    allowfullscreen
                    loading="lazy">
                </iframe>
            </div>
        </div>
    </section> -->

    <section class="container-fluid py-5" id="location">
        <div class="container mb-4">
            <h2 class="text-left mb-3 fw-bold">Lokasi</h2>
            <p class="text-muted mb-4">
                Lokasi Head Office bisnis unit kami
            </p>
        </div>

        <div class="container position-relative">
            <!-- Titik Tanah Abang -->
            <div class="position-relative">
                <img src="{{ asset('/assets/images/maps.png') }}" class="img-fluid rounded shadow" alt="Peta Indonesia" />
                <!-- Pin: Tanah Abang (Jakarta Pusat) -->
                <div class="map-pin" style="top: 71%; left: 26.5%;">
                    <div class="tooltip-custom">
                        <b>PT MAI (Holding Company)</b><br>Jl. Tanah Abang II No.104, RT.9/RW.3, Cideng, <br>Kecamatan Gambir, Kota Jakarta Pusat
                    </div>
                </div>

                <!-- Pin: Tebet (Jakarta Selatan) -->
                <div class="map-pin" style="top: 71%; left: 27.5%;">
                    <div class="tooltip-custom">
                        <b>PT Bumen Redja Abadi</b><br>Jl. Dr. Saharjo No.321 10, RT.10/RW.1, Tebet Bar., <br>Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 13610
                    </div>
                </div>
            </div>

        </div>
    </section>

    @endsection