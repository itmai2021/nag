@extends('layouts.app_landing')
@section('content')
    <section class="py-5 bg-light mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">

                    <!-- Judul Berita -->
                    <h1 class="mb-3 fw-bold">{{ $data['newsdetail']->subject }}</h1>
                    <p class="text-muted">Dipublikasikan pada
                        <strong>{{ \Carbon\Carbon::parse($data['newsdetail']->publication_date)->subDays(30)->locale('id')->translatedFormat('l, d F Y') }}</strong>
                    </p>

                    <!-- Gambar Utama -->
                    <div class="mb-4">
                        <img src="{{ asset('assets/file/news/' . $data['newsdetail']->image) }}" alt="Pembangunan Gedung"
                            class="img-fluid rounded-4 shadow-sm w-100">
                    </div>

                    <!-- Isi Berita -->
                    <div class="fs-5" style="line-height: 1.8;">
                        {!! $data['newsdetail']->description !!}
                    </div>

                    <section class="container py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h2 class="fw-bold mb-0">Berita Lainnya</h2>
                            <a href="{{ route('news') }}" class="text-dark text-decoration-none fw-medium">
                                Semua Berita <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>

                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                            <!-- card 1 -->
                            <div class="col">
                                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                                    <img src="{{ asset('assets/images/card.jpg') }}" class="card-img-top news-img"
                                        alt="Berita 1">

                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title">Pembangunan Gedung Baru Dimulai</h5>
                                        <p class="card-text text-muted">30 Juli 2025</p>
                                        <a href="{{ route('news_detail') }}"
                                            class="text-dark text-decoration-none fw-medium mt-auto">
                                            Selengkapnya <i class="ri-arrow-right-line"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- card 2 -->
                            <div class="col">
                                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                                    <img src="{{ asset('assets/images/card2.jpg') }}" class="card-img-top news-img"
                                        alt="Berita 2">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title">Kegiatan Bakti Sosial di Desa Cibuntu</h5>
                                        <p class="card-text text-muted">Senin, 28 Juli 2025</p>
                                        <a href="{{ route('news_detail') }}"
                                            class="text-dark text-decoration-none fw-medium mt-auto">
                                            Selengkapnya <i class="ri-arrow-right-line"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- card 3 -->
                            <div class="col">
                                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                                    <img src="{{ asset('assets/images/card3.webp') }}" class="card-img-top news-img"
                                        alt="Berita 3">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title">Pelatihan Kewirausahaan untuk Remaja</h5>
                                        <p class="card-text text-muted">Jumat, 25 Juli 2025</p>
                                        <a href="{{ route('news_detail') }}"
                                            class="text-dark text-decoration-none fw-medium mt-auto">
                                            Selengkapnya <i class="ri-arrow-right-line"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <div class="col-lg-4">
                    <h3>Berita Lainnya</h3>
                </div>
            </div>
        </div>
    </section>
@endsection
