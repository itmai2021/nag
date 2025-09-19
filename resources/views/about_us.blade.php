@extends('layouts.app_landing')

@section('content')

<!-- Tentang Kami -->
<audio id="bg-audio" autoplay loop muted>
    <source src="{{ asset('assets/file/MARSARMADA.mp3') }}" type="audio/mpeg">
    Browser Anda tidak mendukung pemutar audio.
</audio>

<div id="audio-control"
    style="position:fixed; bottom:28px; right:18px; z-index:9999; 
           display:flex; align-items:center; gap:10px;">

    <!-- Teks judul lagu -->
    <span id="audio-title"
        style="display:none; background:#f1f5ff; color:#031843; font-weight:600;
               font-size:14px; padding:6px 12px; border-radius:20px;
               box-shadow:0 2px 6px rgba(0,0,0,0.15); white-space:nowrap;">
        🎵 MARS ARMADA
    </span>

    <!-- Tombol -->
    <button id="toggle-audio"
        style="background:#031843; color:#fff; border:none; border-radius:50%;
               width:50px; height:48px; display:flex; align-items:center; justify-content:center;
               box-shadow:0 4px 10px rgba(0,0,0,0.3); cursor:pointer;">
        <i id="icon-audio" class="fas fa-volume-mute"></i>
    </button>
</div>

<section class="about-section"
    style="min-height:calc(100vh - 70px); background:#f8f9fa;"
    data-aos="fade-down">

    <!-- Gambar full width hanya mobile -->
    <div class="d-block d-md-none position-relative" style="margin:0 5px;">
        <!-- Gambar -->
        <img src="{{ asset('/assets/images/nag_50th.jpg') }}"
            alt="Tentang Kami"
            style="height:75px; width:97vw;object-position:top; display:block; object-fit:cover; border-radius:8px;">

        <!-- Overlay gelap transparan -->
        <div style="position:absolute; top:0; left:0; width:100%; height:100%; 
                background:rgba(3,24,67,0.5); border-radius:8px;">
        </div>

        <!-- Teks -->
        <h3 class="fw-bold text-white m-0"
            style="position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); font-size:1.2rem;">
            {{ __('messages.about_us.tentang_kami') }}
        </h3>
    </div>


    <div class="about-sub" style="max-width:1150px; margin:auto; height:100%;">
        <div class="about-box p-0 h-100" data-aos="fade-up" data-aos-delay="200">
            <div class="row g-0 h-100">
                <!-- Kolom Teks -->
                <div class="col-12 col-md-6 p-4" style="overflow-y:auto; max-height:calc(100vh - 140px);">
                    <div class="content mt-0" style="text-align: justify;">
                        {!! __('messages.about_us.deskripsi') !!}
                    </div>
                </div>
                <!-- Kolom Gambar (hanya tampil di desktop) -->
                <div class="col-md-6 d-none d-md-flex">
                    <div class="about-image d-flex justify-content-center align-items-center text-center p-4 h-100 w-100">
                        <h3 class="fw-bold">
                            {{ __('messages.about_us.tentang_kami') }}
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- Section Visi & Misi -->
<section style="padding:60px 0; background:#031843;">
    <div style="max-width:1000px; margin:auto; padding:0 15px;" data-aos="fade-down">
        <div style="
            background:white;
            border-radius:20px;
            padding:40px 30px;
            box-shadow:0 8px 24px rgba(0,0,0,0.08);
            color:#031843;
        " data-aos="fade-up" data-aos-delay="200">
            <h2 class="fw-bold" style="font-size:2rem;text-align:center; margin-bottom:30px;">{{ __('messages.about_us.visi_misi') }}</h2>
            <div style="display:flex; flex-wrap:wrap; gap:30px;">
                <!-- Visi -->
                <div style="flex:1; min-width:280px;">
                    <h4 style="margin-bottom:15px; border-left:5px solid #031843; padding-left:10px;">{{ __('messages.about_us.visi') }}</h4>
                    <p style="line-height:1.7; font-size:1rem;">
                        {{ __('messages.about_us.sub_visi') }}
                        <!-- Menjadi perusahaan kelas global dengan kompetensi dan inovasi yang unggul. -->
                    </p>
                </div>

                <!-- Misi -->
                <div style="flex:1; min-width:280px;">
                    <h4 style="margin-bottom:15px; border-left:5px solid #031843; padding-left:10px;">{{ __('messages.about_us.misi') }}</h4>
                    <p style="line-height:1.7; font-size:1rem;">
                        {{ __('messages.about_us.sub_misi') }}
                        <!-- Mengembangkan kekuatan dan daya saing dalam bidang industri, perdagangan, jasa dan menjadi pilihan utama bagi pelanggan dan mitra. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <div class="timeline-wrapper" style="padding-left:40px;"> -->

<!-- Filosofi -->
<section class="bg-light filosofi-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Kolom Kiri: Judul -->
            <div class="col-lg-4 mb-4" data-aos="fade-right">
                <h2 style="font-size:2.5rem;font-weight:700;color:#031843;line-height:1.2;margin-bottom:10px;">
                    {{ __('messages.about_us.filosofi') }}
                </h2>
                <img src="{{ asset('/assets/images/NAG-tr.png') }}" alt="Logo" class="logo-img3">
            </div>
            <!-- <div class="col-1"></div> -->
            <div class="col-lg-7" data-aos="fade-left">
                <!-- Item 1 -->
                <div class="timeline-item">
                    <div class="timeline-number">1</div>
                    <div class="timeline-content">
                        <h6 class="fw-bold mb-0">
                            {{ __('messages.about_us.filo1') }}
                        </h6>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="timeline-item">
                    <div class="timeline-number">2</div>
                    <div class="timeline-content">
                        <h6 class="fw-bold mb-0">
                            {{ __('messages.about_us.filo2') }}
                        </h6>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="timeline-item">
                    <div class="timeline-number">3</div>
                    <div class="timeline-content">
                        <h6 class="fw-bold mb-0">
                            {{ __('messages.about_us.filo3') }}
                        </h6>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="timeline-item">
                    <div class="timeline-number">4</div>
                    <div class="timeline-content">
                        <h6 class="fw-bold mb-0">
                            {{ __('messages.about_us.filo4') }}
                        </h6>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="timeline-item">
                    <div class="timeline-number">5</div>
                    <div class="timeline-content">
                        <h6 class="fw-bold mb-0">
                            {{ __('messages.about_us.filo5') }}
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Company Core Values -->
<section class="core-section" style="padding:50px 0;background:#ffffff;position:relative;">
    <div class="core-wrapper" style="max-width:800px;margin:auto;position:relative;height:500px;">
        <!-- Lingkaran Tengah -->
        <div class="core-center-circle"
            style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);
                   background:#031843;color:#fff;width:160px;height:160px;border-radius:50%;
                   display:flex;align-items:center;justify-content:center;text-align:center;
                   box-shadow:0 5px 15px rgba(0,0,0,0.1);z-index:2;">
            <h4 style="margin:0;font-size:1.1rem;line-height:1.4;"><b>
                    {!! __('messages.about_us.nilai_inti') !!}
                    <!-- Nilai Inti<br>Perusahaan -->
                </b></h4>
        </div>

        @php
        $core_values = [
        ['title' => 'Integritas', 'desc' => 'Jujur dalam setiap tindakan.'],
        ['title' => 'Akuntabilitas', 'desc' => 'Dapat mempertanggungjawabkan tugasnya.'],
        ['title' => 'Rasa Hormat', 'desc' => 'Mempunyai rasa saling menghormati.'],
        ['title' => 'Rasa Memiliki', 'desc' => 'Mempunyai rasa memiliki.'],
        ['title' => 'Kepedulian', 'desc' => 'Mempunyai rasa kepedulian.'],
        ['title' => 'Perbaikan', 'desc' => 'Perbaikan secara terus menerus dan konsisten.'],
        ];

        $core_values_en =[
        ['title' => 'Integrity', 'desc' => 'Honest in every action.'],
        ['title' => 'Accountability', 'desc' => 'Accountable for their responsibilities.'],
        ['title' => 'Respectability', 'desc' => 'Having mutual respect.'],
        ['title' => 'Sense of Belonging', 'desc' => 'Having a sense of ownership.'],
        ['title' => 'Care', 'desc' => 'Having a sense of care.'],
        ['title' => 'Improvement', 'desc' => 'Continuous and consistent improvement.'],
        ];


        $positions = [
        ['top' => '0%', 'left' => '50%', 'transform' => 'translate(-50%,0)'], // Jam 12
        ['top' => '20%', 'right' => '0%', 'transform' => 'translate(0,0)'], // Jam 2
        ['bottom' => '20%', 'right' => '0%', 'transform' => 'translate(0,0)'],// Jam 4
        ['bottom' => '0%', 'left' => '50%', 'transform' => 'translate(-50%,0)'],// Jam 6
        ['bottom' => '20%', 'left' => '0%', 'transform' => 'translate(0,0)'], // Jam 8
        ['top' => '20%', 'left' => '0%', 'transform' => 'translate(0,0)'], // Jam 10
        ];
        @endphp

        @php
        $core_values = (app()->getLocale() == 'en') ? $core_values_en : $core_values;
        @endphp

        @foreach ($core_values as $i => $value)
        @php
        $pos = $positions[$i];
        $style = "position:absolute;";
        foreach ($pos as $key => $val) {
        $style .= "$key:$val;";
        }
        $style .= "width:200px;text-align:center;";
        $delay = $i * 150;
        @endphp
        <div class="core-card-container" style="{{ $style }}" data-aos="zoom-in" data-aos-delay="{{ $delay }}">
            <div class="core-card">
                <h5><b>{{ $value['title'] }}</b></h5>
                <p>{{ $value['desc'] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>





@endsection
@section('script')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const audio = document.getElementById("bg-audio");
        const btn = document.getElementById("toggle-audio");
        const icon = document.getElementById("icon-audio");
        const title = document.getElementById("audio-title");

        btn.addEventListener("click", function() {
            if (audio.muted) {
                audio.muted = false;
                audio.play();
                icon.classList.remove("fa-volume-mute");
                icon.classList.add("fa-volume-up");
                title.style.display = "inline-block"; // tampilkan teks
            } else {
                audio.muted = true;
                icon.classList.remove("fa-volume-up");
                icon.classList.add("fa-volume-mute");
                title.style.display = "none"; // sembunyikan teks
            }
        });


        let visi = document.getElementById("contentVisi");
        let misi = document.getElementById("contentMisi");
        let tabVisi = document.getElementById("tabVisi");
        let tabMisi = document.getElementById("tabMisi");

        tabVisi.addEventListener("click", function() {
            misi.style.display = "none";
            visi.style.display = "block";
            visi.classList.remove("fade-in");
            void visi.offsetWidth; // trik restart animasi
            visi.classList.add("fade-in");

            tabVisi.style.borderBottom = "2px solid white";
            tabMisi.style.borderBottom = "none";
        });

        tabMisi.addEventListener("click", function() {
            visi.style.display = "none";
            misi.style.display = "block";
            misi.classList.remove("fade-in");
            void misi.offsetWidth; // trik restart animasi
            misi.classList.add("fade-in");

            tabMisi.style.borderBottom = "2px solid white";
            tabVisi.style.borderBottom = "none";
        });

        // AOS init
        AOS.init({
            duration: 800,
            once: false,
            mirror: true
        });
    });
</script>
@endsection