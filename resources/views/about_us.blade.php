@extends('layouts.app_landing')

@section('content')

<!-- Tentang Kami -->
<section class="py-5 bg-light mt-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Tentang Kami</h2>
            <div class="custom-gradient-line"></div>

        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <p class="lead text-justify">
                    New Armada Group pertama kali didirikan pada tahun 1974 oleh Bapak David Herman Jaya sebagai auto body manufacture di Magelang, Jawa Tengah. Selama 51 tahun, New Armada Group terus berkembang menjadi salah satu perusahaan nasional bernilai tinggi yang didukung lebih dari 10.000 karyawan yang tersebar di kota besar di Indonesia.
                    <br><br>
                    Sampai saat ini, New Armada Group memiliki 32 unit bisnis yang bergerak di bidang otomotif, manufaktur, keuangan dan layanan. New Armada Group berkembang menjadi 6 pabrik manufaktur dengan beberapa perusahaan otomotif terbesar di Indonesia sebagai klien kami.
                    <br><br>
                    Pada sektor otomotif terdapat 13 unit bisnis yang merupakan salah satu pusat kekuatan New Armada Group yang menawarkan berbagai merek otomotif. 4 unit bisnis di sektor keuangan juga didirikan untuk mendukung UMKM Indonesia dengan menyediakan kredit mudah dan cepat serta leasing otomotif yang tersebar dari Sumatera hingga Pulau Sulawesi. New Armada Group juga memperluas cakupannya dalam layanan industri dengan 9 unit bisnis mulai dari Pusat Perbelanjaan, Hotel & Resor, SPBU hingga Konstruksi.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visi & Misi -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Visi & Misi</h2>
            <div class="custom-gradient-line"></div>

        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="p-4 shadow-sm border-start border-5 border-primary bg-light h-100">
                    <h4 class="text-primary fw-bold">Visi</h4>
                    <p class="mb-0">Menjadi perusahaan kelas global dengan kompetensi dan inovasi yang unggul.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-4 shadow-sm border-start border-5 border-primary bg-light h-100">
                    <h4 class="text-primary fw-bold">Misi</h4>
                    <ul class="mb-0 ps-3">
                        <li>Mengembangkan kekuatan dan daya saing dalam bidang industri, perdagangan, jasa dan menjadi pilihan utama bagi pelanggan dan mitra.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Filosofi -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Filosofi</h2>
            <div class="custom-gradient-line"></div>

        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <ul class="list-group list-group-flush fs-5">
                    <li class="list-group-item">1. Kepuasan pelanggan adalah komitmen kami</li>
                    <li class="list-group-item">2. Proaktif, kepedulian & komunikasi yang baik adalah kebiasaan kami</li>
                    <li class="list-group-item">3. Kerja tim adalah kekuatan kami</li>
                    <li class="list-group-item">4. Pemasok, distributor & karyawan adalah mitra kami</li>
                    <li class="list-group-item">5. Terus mengembangkan diri adalah kunci sukses kami</li>
                </ul>
                <p class="mt-3 text-end fst-italic">— Filosofi New Armada Group</p>
            </div>
        </div>
    </div>
</section>

<!-- Company Core Values -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Nilai Inti Perusahaan</h2>
            <div class="custom-gradient-line"></div>

        </div>
        <div class="row g-4 justify-content-center">
            @php
            $core_values = [
            ['title' => 'Integritas', 'icon' => 'bi-shield-check'],
            ['title' => 'Akuntabilitas', 'icon' => 'bi-clipboard-check'],
            ['title' => 'Rasa Hormat', 'icon' => 'bi-emoji-smile'],
            ['title' => 'Rasa Memiliki', 'icon' => 'bi-emoji-smile'],
            ['title' => 'Kepedulian', 'icon' => 'bi-heart'],
            ['title' => 'Perbaikan', 'icon' => 'bi-bar-chart-line'],
            ];
            @endphp

            @foreach ($core_values as $value)
            <div class="col-6 col-md-4 col-lg-3">
                <div class="banner__card">
                    <h6><b>{{ $value['title'] }}</b></h6>
                </div>
            </div>
            <!-- <section class="section__container banner__container">
                <div class="banner__card">
                    <h6>{{ $value['title'] }}</h4>
                </div>
            </section> -->
            @endforeach

        </div>
    </div>
</section>

@endsection