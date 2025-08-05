@extends('layouts.app_landing')
@section('content')
<section class="py-5 bg-light mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <!-- Judul Berita -->
                <h1 class="mb-3 fw-bold">Pembangunan Gedung Baru Dimulai</h1>
                <p class="text-muted">Dipublikasikan pada <strong>30 Juli 2025</strong> oleh Admin</p>

                <!-- Gambar Utama -->
                <div class="mb-4">
                    <img src="/assets/images/card.jpg" alt="Pembangunan Gedung" class="img-fluid rounded-4 shadow-sm w-100">
                </div>

                <!-- Isi Berita -->
                <div class="fs-5" style="line-height: 1.8;">
                    <p>Pembangunan gedung baru resmi dimulai pada tanggal 30 Juli 2025. Proyek ini menjadi langkah penting dalam pengembangan fasilitas dan layanan untuk masyarakat.</p>

                    <p>Gedung baru ini dirancang dengan konsep modern, ramah lingkungan, dan dapat menampung lebih banyak kegiatan pelayanan serta kegiatan administrasi.</p>

                    <blockquote class="blockquote px-4 py-3 bg-white border-start border-4 border-primary rounded shadow-sm my-4">
                        <p class="mb-0">"Kami berharap gedung ini dapat memberikan kenyamanan dan kemudahan bagi masyarakat," kata Kepala Instansi saat peletakan batu pertama.</p>
                    </blockquote>

                    <p>Pembangunan direncanakan selesai dalam waktu 8 bulan dan akan mulai digunakan pada pertengahan 2026. Dengan adanya gedung ini, diharapkan pelayanan dapat menjadi lebih cepat dan efisien.</p>

                    <p>Berbagai pihak turut mendukung proyek ini, baik dari pemerintah daerah, pihak swasta, hingga tokoh masyarakat sekitar.</p>
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
                                <img src="/assets/images/card.jpg" class="card-img-top news-img" alt="Berita 1">
                                <div class="card-body">
                                    <h5 class="card-title">Pembangunan Gedung Baru Dimulai</h5>
                                    <p class="card-text text-muted">30 Juli 2025</p>
                                    <a href="{{route('news_detail')}}" class="text-dark text-decoration-none fw-medium">Read More <i class="ri-arrow-right-line"></i></a>
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
                                    <a href="{{route('news_detail')}}" class="text-dark text-decoration-none fw-medium">Read More <i class="ri-arrow-right-line"></i></a>
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
                                    <a href="{{route('news_detail')}}" class="text-dark text-decoration-none fw-medium">Read More <i class="ri-arrow-right-line"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
@endsection