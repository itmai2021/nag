@extends('layouts.app_landing')

@section('content')

<!-- Tentang Kami -->
<!-- <section style="padding:60px 0;background:#f8f9fa; margin-top:5vh" data-aos="fade-up">
    <div style="max-width:1150px;margin:auto;padding:0 15px;position:relative;">

        <div style="
            background:#f1f1f5;
            border-radius:20px;
            padding:35px;
            display:flex;
            flex-direction:column;
            width:96%;
        " data-aos="fade-up" data-aos-delay="200">
            <h2 class="fw-bold" style="margin-bottom:20px;">Tentang Kami</h2>
            <div class="col-9">
                <p style="color:#555;line-height:1.7;text-align:justify;font-size:0.9rem;">
                    PT Mekar Armada Investama merupakan holding company dari New Armada Group. PT Mekar Armada Investama berkomitmen melakukan penyelarasan di semua anak perusahaan dalam lingkup berbagai aspek bisnis, pengelolaan sumber daya manusia, portofolio bisnis dan lain-lain. Ini merupakan tantangan menarik sekaligus berprospek tinggi mengingat New Armada Group menaungi 32 unit bisnis yang bergerak di sektor otomotif, manufaktur, keuangan, dan layanan industri. <br> <br>

                    New Armada Group didirikan pertama kali pada tahun 1974 oleh Bapak David Herman Jaya sebagai produsen karoseri kendaraan di Magelang, Jawa Tengah. Dalam perjalanannya selama lebih dari 50 tahun, New Armada Group terus berkembang menjadi salah satu perusahaan nasional bernilai tinggi, dengan dukungan lebih dari 10.000 karyawan yang tersebar di berbagai kota besar di Indonesia. <br> <br>

                    Di bidang manufaktur, New Armada Group telah tumbuh menjadi grup dengan 6 pabrik produksi, melayani beberapa perusahaan otomotif terbesar di Indonesia. Pada sektor otomotif, terdapat 13 unit bisnis yang menjadi salah satu kekuatan utama, menawarkan beragam merek kendaraan dan layanan pendukung. <br> <br>

                    Untuk memperkuat dukungan terhadap pertumbuhan ekonomi nasional, khususnya pelaku UMKM, New Armada Group juga mengembangkan 4 unit bisnis di sektor keuangan, menyediakan layanan pembiayaan, kredit mikro, dan leasing otomotif yang menjangkau wilayah dari Sumatera hingga Sulawesi. <br>

                    Selain itu, New Armada Group turut memperluas cakupan bisnis di sektor layanan, melalui 9 unit bisnis yang mencakup pusat perbelanjaan, hotel & resor, SPBU, hingga konstruksi. <br>

                    Dengan semangat inovasi, komitmen terhadap kualitas, dan kepuasan pelanggan sebagai prioritas, New Armada Group terus melangkah maju sebagai grup usaha terdepan di Indonesia.
                </p>
            </div>

        </div>
        <div style="
            position:absolute;
            right:0;
            top:45%;
            transform:translateY(-50%);
            width:320px;
            background:#031843;
            color:white;
            padding:30px;
            border-radius:20px;
            box-shadow:0 4px 20px rgba(0,0,0,0.08);
            min-height:260px;
        " data-aos="fade-left" data-aos-delay="350">
            <div style="
                display:flex;
                gap:20px;
                margin-bottom:15px;
                border-bottom:1px solid rgba(255,255,255,0.3);
                padding-bottom:8px;
            ">
                <span id="tabVisi" style="font-size:1.1rem;font-weight:600;color:white;cursor:pointer;border-bottom:2px solid white;">Visi</span>
                <span id="tabMisi" style="font-size:1.1rem;font-weight:600;color:white;cursor:pointer;">Misi</span>
            </div>
            
            <div id="contentVisi" style="color:white;display:block;line-height:1.6;font-size:1.1rem;">
                Menjadi perusahaan kelas global dengan kompetensi dan inovasi yang unggul.
            </div>
            <div id="contentMisi" style="color:white;display:none;line-height:1.6;font-size:1.1rem;">
                Mengembangkan kekuatan dan daya saing dalam bidang industri, perdagangan, jasa dan menjadi pilihan utama bagi pelanggan dan mitra.
            </div>


        </div>
    </div>
</section> -->
<audio id="bg-audio" autoplay loop muted>
    <source src="{{ asset('assets/file/MARSARMADA.mp3') }}" type="audio/mpeg">
    Browser Anda tidak mendukung pemutar audio.
</audio>
<button id="toggle-audio"
    style="position:fixed; bottom:30px; right:20px; z-index:9999; 
           background:#031843; color:#fff; border:none; border-radius:50%;
           width:45px; height:45px; display:flex; align-items:center; justify-content:center;
           box-shadow:0 4px 10px rgba(0,0,0,0.3); cursor:pointer;">
    <i id="icon-audio" class="fas fa-volume-mute"></i>
</button>

<section class="about-section" style="padding:60px 0; background:#f8f9fa; margin-top:0" data-aos="fade-down">
    <div style="max-width:1150px; margin:auto; padding:0 15px; position:relative;margin-top:10vh">
        <div class="about-box" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('/assets/images/MAI.png') }}" alt="Logo" style="max-width: 20vh;">
            <p class="mt-2 mb-0" style="color:#222;font-size:0.7rem; line-height:1.1;"><i>holding company of</i></p>
            <p class="fw-bold mt-0" style="color:#222;font-size:0.85rem; line-height:1.1;">New Armada Group</p>

            <h2 class="fw-bold mb-2" style="color:black">{{ __('messages.about_us.tentang_kami') }}</h2>

            <div class="content">
                {!! __('messages.about_us.deskripsi') !!}
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
            <div class="col-lg-5 mb-4 mb-lg-0" data-aos="fade-right">
                <h2 style="font-size:2.5rem;font-weight:700;color:#031843;line-height:1.2;margin-bottom:10px;">
                    {{ __('messages.about_us.filosofi') }}
                </h2>
                <img src="{{ asset('/assets/images/NAG-tr.png') }}" alt="Logo" class="logo-img3">
            </div>
            <div class="col-2">
            </div>
            <div class="col-lg-5" data-aos="fade-left">
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
        ['title' => 'Integritas', 'desc' => 'Konsistensi dalam tindakan, nilai-nilai, prinsip, dan kejujuran dengan karakter yang kuat.'],
        ['title' => 'Akuntabilitas', 'desc' => 'Bertanggung jawab penuh atas tindakan dan keadaan sesuai kewenangan.'],
        ['title' => 'Rasa Hormat', 'desc' => 'Menghormati dan menghargai kinerja serta kontribusi sesama.'],
        ['title' => 'Rasa Memiliki', 'desc' => 'Cinta dan ikut memiliki perusahaan meski tanpa kepemilikan saham.'],
        ['title' => 'Kepedulian', 'desc' => 'Memberi perhatian, menjaga, dan memelihara sumber daya yang ada.'],
        ['title' => 'Perbaikan', 'desc' => 'Berani bertindak untuk meningkatkan kualitas hidup menjadi lebih baik.'],
        ];

        $core_values_en =[
        ['title' => 'Integrity', 'desc' => 'Consistency in actions, values, principles, and honesty with strong character.'],
        ['title' => 'Accountability', 'desc' => 'Taking full responsibility for actions and circumstances in accordance with authority.'],
        ['title' => 'Respect', 'desc' => 'Appreciating and valuing the performance and contributions of others.'],
        ['title' => 'Sense of Belonging', 'desc' => 'Loving and feeling ownership of the company even without shareholding.'],
        ['title' => 'Caring', 'desc' => 'Providing attention, safeguarding, and maintaining existing resources.'],
        ['title' => 'Improvement', 'desc' => 'Having the courage to take action to enhance the quality of life for the better.'],
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

        btn.addEventListener("click", function() {
            if (audio.muted) {
                audio.muted = false;
                audio.play();
                icon.classList.remove("fa-volume-mute");
                icon.classList.add("fa-volume-up");
            } else {
                audio.muted = true;
                icon.classList.remove("fa-volume-up");
                icon.classList.add("fa-volume-mute");
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