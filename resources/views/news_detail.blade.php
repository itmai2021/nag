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

                    <!-- Judul Berita -->
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
                </div>
                <div class="col-lg-3">
                    <h4>Berita Lainnya</h4>
                    @foreach ($data['othersnews'] as $a)
                        <div class="row mb-3">
                            <!-- Card -->
                            <div class="col mb-3">
                                <a href="{{ route('news.show', $a->id) }}">
                                    <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
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
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
