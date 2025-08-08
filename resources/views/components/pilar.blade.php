@section('pilar')
<section class="section__container destination__container mt-4 mb-5" id="pilar">
    <h2 class="section__header">Sektor Bisnis</h2>
    <p class="section__description">
        Sektor Bisnis usaha utama kami dalam berbagai sektor industri.
    </p>
    <div class="grid-wrapper">
        <div class="grid-no-gap">
            <div class="grid-item automotive" id="open-automotive">
                <i class="ri-roadster-fill icon-center"></i>
                <div class="label">AUTOMOTIVE TRADING</div>
            </div>
            <div class="grid-item manufacture" id="open-manufacture">
                <i class="ri-building-4-fill icon-center"></i>
                <div class="label">MANUFACTURE</div>
            </div>
            <div class="grid-item finance" id="open-finance">
                <i class="ri-bank-card-fill icon-center"></i>
                <div class="label">FINANCIAL SERVICES</div>
            </div>
            <div class="grid-item others" id="open-other">
                <i class="ri-service-fill icon-center"></i>
                <div class="label">OTHER SERVICES</div>
            </div>
        </div>


        <div class="circle-container">
            <div class="circle-item top-left">
                <i class="fas fa-car"></i>
                <span id="automotive-smalltext">AUTOMOTIVE<br>TRADING</span>
            </div>
            <div class="circle-item top-right">
                <i class="fas fa-industry"></i>
                <span id="manufacture-smalltext">MANUFACTURE</span>
            </div>
            <div class="circle-item bottom-left">
                <i class="fas fa-university"></i>
                <span id="financial-smalltext">FINANCIAL<br>SERVICES</span>
            </div>
            <div class="circle-item bottom-right">
                <i class="fas fa-concierge-bell"></i>
                <span id="other-smalltext">OTHERS</span>
            </div>
        </div>
    </div>
</section>

<!-- AUTOMOTIVE -->
<section class="section__container destination__container mt-5 d-none" id="automotive" style="margin-bottom: 20vh;">
    <h2 class="section__header mb-5 text-center">Automotive Trading</h2>

    <div class="text-left mb-4 ml-4">
        <p class="mb-0 text-start" id="back-to-pilar" style="cursor: pointer; margin-left: 10vh;">
            <i class="ri-arrow-left-line"></i> Back
        </p>
    </div>

    <!-- Grid Logo Wrapper -->
    <div class="logo-row">
        <div class="logo-item text-center">
            <img src="/assets/images/bra-logo.jpg" alt="BRA" data-bs-toggle="modal" data-bs-target="#imageModal">
        </div>
        <div class="logo-item text-center">
            <img src="/assets/images/TM.png" alt="TM" data-bs-toggle="modal" data-bs-target="#imageModal2">
        </div>
        <div class="logo-item text-center">
            <img src="/assets/images/AIM.png" alt="AIM">
        </div>
        <div class="logo-item text-center">
            <img src="/assets/images/aat.jpg" alt="AAT">
        </div>
        <div class="logo-item text-center">
            <img src="/assets/images/ATJ.png" alt="ATJ">
        </div>
        <div class="logo-item text-center">
            <img src="/assets/images/TJMA.png" alt="TJMA">
        </div>
    </div>

    <!-- Baris 2 -->
    <div class="logo-row">
        <div class="logo-item text-center">
            <img src="/assets/images/AJM.png" alt="AJM">
        </div>
        <div class="logo-item text-center">
            <img src="/assets/images/AP.png" alt="AP">
        </div>
        <div class="logo-item text-center">
            <img src="/assets/images/LGC.png" alt="LGC">
        </div>
        <div class="logo-item text-center">
            <img src="/assets/images/APM.png" alt="APM">
        </div>
        <div class="logo-item text-center">
            <img src="/assets/images/AMJA.png" alt="AMJA">
        </div>
        <div class="logo-item text-center">
            <img src="/assets/images/ATJA.png" alt="ATJA">
        </div>
    </div>

    <!-- Baris 3 (isi 1 logo, tetap rata tengah) -->
    <div class="logo-row">
        <div class="logo-item text-center">
            <img src="/assets/images/ABJ.png" alt="ABJ">
        </div>
    </div>
</section>

<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Bumen Redja Abadi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body text-center">
                <section class="section__container showcase__container" id="package">
                    <div class="showcase__image">
                        <img src="{{asset('/assets/images/bra-logo.jpg')}}" alt="showcase" />
                    </div>
                    <div class="showcase__content">
                        <p style="text-align: left;">
                            PT Bumen Redja Abadi adalah perusahaan otomotif yang berdiri pada tahun 1981 yang berfokus pada penjualan, distribusi, serta layanan purna jual kendaraan Mitsubishi di Indonesia.
                        </p>
                        <div class="showcase__btn" style="position: relative; height: 200px;">
                            <a href="https://bumenredjaabadi.co.id/" target="_blank"
                                style="position: absolute; bottom: 0; right: 0; color: black; text-decoration: none; display: flex; align-items: center; gap: 5px;">
                                Read More
                                <span><i class="ri-arrow-right-line"></i></span>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="imageModal2" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Tunas Mobil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body text-center">
                <section class="section__container showcase__container" id="package">
                    <div class="showcase__image">
                        <img src="{{asset('/assets/images/TM.png')}}" alt="showcase" />
                    </div>
                    <div class="showcase__content">
                        <p style="text-align: left;">
                            PT Tunas Mobil adalah sebuah perusahaan yang bergerak di bidang otomotif. Menjalankan usahanya sejak tahun 1988. PT Tunas Mobil merupakan Dealer Resmi mobil Honda yang yang sudah memenuhi standar untuk 3S : Sales, Service dan Sparepart.
                        </p>
                        <div class="showcase__btn" style="position: relative; height: 200px;">
                            <a href="https://hondatunasjaya.co.id/" target="_blank"
                                style="position: absolute; bottom: 0; right: 0; color: black; text-decoration: none; display: flex; align-items: center; gap: 5px;">
                                Read More
                                <span><i class="ri-arrow-right-line"></i></span>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<!-- MANUFACTURE -->
<section class="section__container destination__container mt-5 d-none" id="manufacture" style="margin-bottom: 20vh;">
    <h2 class="section__header mb-5 text-center">Manufacture</h2>
    <div class="text-left mb-4 ml-4">
        <p class="mb-0 text-start" id="back-to-pilar2" style="cursor: pointer;margin-left: 10vh;">
            <i class="ri-arrow-left-line"></i>Back
        </p>
    </div>
    <div class="d-flex flex-wrap justify-content-center align-items-center gap-4">
        <div class="text-center">
            <img src="/assets/images/CCF.png" alt="CCF" style="cursor:pointer;max-width: 100px; height: auto;" data-bs-toggle="modal" data-bs-target="#imageModal">
        </div>
        <div class="text-center">
            <img src="/assets/images/AAA.png" alt="AAA" style="cursor:pointer;max-width: 100px; height: auto;" data-bs-toggle="modal" data-bs-target="#imageModal2">
        </div>
        <div class="text-center">
            <img src="/assets/images/MAJKAROSERI.png" alt="MAJKAROSERI" style="cursor:pointer;max-width: 100px; height: auto;">
        </div>
        <div class="text-center">
            <img src="/assets/images/MAJSTT.png" alt="MAJSTT" style="cursor:pointer;max-width: 100px; height: auto;">
        </div>
        <div class="text-center">
            <img src="/assets/images/KJTS.png" alt="KJTS" style="cursor:pointer;max-width: 100px; height: auto;">
        </div>
        <div class="text-center">
            <img src="/assets/images/ISA.png" alt="ISA" style="cursor:pointer;max-width: 100px; height: auto;">
        </div>
        <!-- Tambahkan logo lainnya jika ada -->
    </div>
</section>
<!-- FINANCE -->
<section class="section__container destination__container mt-5 d-none" id="finance" style="margin-bottom: 20vh;">
    <h2 class="section__header mb-5 text-center">Financial Services</h2>
    <div class="text-left mb-4 ml-4">
        <p class="mb-0 text-start" id="back-to-pilar3" style="cursor: pointer;margin-left: 10vh;">
            <i class="ri-arrow-left-line"></i>Back
        </p>
    </div>
    <div class="d-flex flex-wrap justify-content-center align-items-center gap-4">
        <div class="text-center">
            <img src="/assets/images/BPRAM.png" alt="BPRAM" style="cursor:pointer;max-width: 100px; height: auto;" data-bs-toggle="modal" data-bs-target="#imageModal">
        </div>
        <div class="text-center">
            <img src="/assets/images/BPRAMI.png" alt="BPRAMI" style="cursor:pointer;max-width: 100px; height: auto;" data-bs-toggle="modal" data-bs-target="#imageModal2">
        </div>
        <div class="text-center">
            <img src="/assets/images/BPRDMS.png" alt="BPRDMS" style="cursor:pointer;max-width: 100px; height: auto;">
        </div>
        <div class="text-center">
            <img src="/assets/images/AF.png" alt="AF" style="cursor:pointer;max-width: 100px; height: auto;">
        </div>
        <!-- Tambahkan logo lainnya jika ada -->
    </div>
</section>

<!-- OTHER -->
<section class="section__container destination__container mt-5 d-none" id="other" style="margin-bottom: 20vh;">
    <h2 class="section__header mb-5 text-center">Other Services</h2>
    <div class="text-left mb-4 ml-4">
        <p class="mb-0 text-start" id="back-to-pilar4" style="cursor: pointer;margin-left: 10vh;">
            <i class="ri-arrow-left-line"></i>Back
        </p>
    </div>
    <div class="logo-row">
        <div class="logo-item text-center">
            <img src="/assets/images/AHG.png" alt="AHG" data-bs-toggle="modal" data-bs-target="#imageModal">
        </div>
        <div class="logo-item text-center">
            <img src="/assets/images/AJA.png" alt="AJA" data-bs-toggle="modal" data-bs-target="#imageModal2">
        </div>
        <div class="logo-item text-center">
            <img src="/assets/images/ARMADAINVESTAMA.png" alt="AI">
        </div>
        <div class="logo-item text-center">
            <img src="/assets/images/AV.png" alt="AV">
        </div>
        <div class="logo-item text-center">
            <img src="/assets/images/MALARTOS.png" alt="GAM">
        </div>
        <div class="logo-item text-center">
            <img src="/assets/images/GRANDARTOS.png" alt="GAHC">
        </div>
    </div>

    <!-- Baris 2 -->
    <div class="logo-row">
        <div class="logo-item text-center">
            <img src="/assets/images/AL.png" alt="AL">
        </div>
        <div class="logo-item text-center">
            <img src="/assets/images/KJJ.png" alt="KJJ">
        </div>
        <div class="logo-item text-center">
            <img src="/assets/images/MAI.png" alt="MAI">
        </div>
    </div>
</section>
@endsection