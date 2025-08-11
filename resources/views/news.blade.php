@extends('layouts.app_landing')
@section('content')
<!-- Berita -->
<div style="background-color: #ffffffff;padding-bottom:10vh;margin-top:13vh"> <!-- Ganti warna sesuai keinginan -->
    <section class="container py-5" id="news">
        <h2 class="text-left mb-3 fw-bold">Berita</h2>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4">
            <!-- card 1 -->
            <div class="col">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <img src="{{ asset('assets/images/card.jpg') }}" class="card-img-top news-img" alt="Berita 1">

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
                    <img src="{{ asset('assets/images/card2.jpg') }}" class="card-img-top news-img" alt="Berita 2">
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
                    <img src="{{ asset('assets/images/card3.webp') }}" class="card-img-top news-img" alt="Berita 3">
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
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <!-- card 1 -->
            <div class="col">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <img src="{{ asset('assets/images/card.jpg') }}" class="card-img-top news-img" alt="Berita 1">

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
                    <img src="{{ asset('assets/images/card2.jpg') }}" class="card-img-top news-img" alt="Berita 2">
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
                    <img src="{{ asset('assets/images/card3.webp') }}" class="card-img-top news-img" alt="Berita 3">
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
@endsection