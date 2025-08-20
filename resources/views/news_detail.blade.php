@extends('layouts.app_landing')
@section('content')
<section class="py-5 bg-light mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="mb-3 fw-bold">{{ $data['newsdetail']->subject }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <p class="text-muted">Dipublikasikan pada
                    <strong>{{ \Carbon\Carbon::parse($data['newsdetail']->publication_date)->subDays(30)->locale('id')->translatedFormat('l, d F Y') }}</strong>
                </p>
                <div class="mb-4">
                    <img src="{{ asset('assets/file/news/' . $data['newsdetail']->image) }}" alt="Pembangunan Gedung"
                        class="img-fluid rounded-4 shadow-sm w-100">
                </div>
                <div class="fs-5" style="line-height: 1.8;">
                    {!! $data['newsdetail']->description !!}
                </div>
            </div>
            <div class="col-lg-3">
                <div style="position: sticky; top: 20px; height: calc(100vh - 80px);">

                    <h4>Berita Lainnya</h4>

                    <div style="
                        height: calc(100% - 40px); 
                        overflow-y: auto; 
                        -ms-overflow-style: none;
                        scrollbar-width: none;">
                        <style>
                            div[style*='overflow-y: auto']::-webkit-scrollbar {
                                display: none;
                            }
                        </style>

                        @foreach ($data['othersnews'] as $a)
                        <div class="row mb-2">
                            <div class="col mb-3">
                                <a href="{{ route('news.show', $a->id) }}">
                                    <div class="card card-trans-small shadow-sm border-0 rounded-4 overflow-hidden">
                                        <img src="{{ asset('assets/file/news/' . $a->image) }}"
                                            class="card-img-top news-img" alt="Berita 1" style="height: 120px">

                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title mb-0" style="font-size: 14px;">
                                                {{ $a->subject }}
                                            </h5>

                                            <p class="card-text text-muted" style="font-size: 12px;">
                                                {{ \Carbon\Carbon::parse($a->publication_date)->subDays(30)->locale('id')->translatedFormat('l, d F Y') }}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                        <p class="mb-0 text-end" style="cursor:pointer;">
                            <a href="{{ route('news') }}" style="text-decoration: none; color: #343a40;">Lihat Selengkapnya <i
                                    class="ri-arrow-right-line"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection