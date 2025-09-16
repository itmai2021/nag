@extends('layouts.app_landing')
@section('content')
<div style="padding-bottom:10vh;margin-top:10vh">
    <section class="container py-5" id="news">
        <h2 class="text-left mb-3 fw-bold">{{ __('messages.landing.berita') }}</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4 mt-1">
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
                        <h5 class="card-title">{{ (app()->getLocale() == 'en' && !empty($a->subject_en)) ? $a->subject_en : $a->subject }}</h5>

                        @php
                        \Carbon\Carbon::setLocale(app()->getLocale());
                        @endphp

                        <p class="card-text text-muted">
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