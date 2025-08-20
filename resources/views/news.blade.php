@extends('layouts.app_landing')
@section('content')
<!-- Berita -->
<div style="padding-bottom:10vh;margin-top:13vh"> <!-- Ganti warna sesuai keinginan -->
    <section class="container py-5" id="news">
        <h2 class="text-left mb-3 fw-bold">Berita</h2>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4">
            @foreach($data['news'] as $val)
            <div class="col">
                <div class="card card-trans h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <img src="{{ asset('assets/file/news/'.$val->image) }}" class="card-img-top news-img" alt="Berita 1">

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{$val->subject}}</h5>
                        <p class="card-text text-muted">{{ \Carbon\Carbon::parse($val->publication_date)->subDays(30)->locale('id')->translatedFormat('l, d F Y') }}</p>
                        <a href="{{ route('news.show', $val->id) }}" class="text-dark text-decoration-none fw-medium mt-auto">
                            Selengkapnya <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection