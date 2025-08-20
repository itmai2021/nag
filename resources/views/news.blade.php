@extends('layouts.app_landing')
@section('content')
<div style="padding-bottom:10vh;margin-top:13vh">
    <section class="container py-5" id="news">
        <h2 class="text-left mb-3 fw-bold">Berita</h2>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4">
            @foreach($data['news'] as $val)
            <div class="col">
                <div class="card card-trans h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <img src="{{ asset('assets/file/news/'.$val->image) }}" class="card-img-top news-img" alt="Berita">

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title mb-2">{{ $val->subject }}</h5>
                        <p class="card-text text-muted mb-3">
                            {{ \Carbon\Carbon::parse($val->publication_date)->locale('id')->translatedFormat('l, d F Y') }}
                        </p>
                        <a href="{{ route('news.show', $val->id) }}" class="text-decoration-none fw-medium mt-auto text-dark">
                            Selengkapnya <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Showing x–y of z --}}
        @if ($data['news']->total() > 0)
        <div class="text-muted small mb-2">
            Menampilkan {{ $data['news']->firstItem() }}–{{ $data['news']->lastItem() }} dari {{ $data['news']->total() }} hasil
        </div>
        @endif

        {{-- Pagination (Bootstrap 5) --}}
        <div class="d-flex justify-content-center">
            {{ $data['news']->links('vendor.pagination.bootstrap-5') }}
        </div>
    </section>
</div>
@endsection