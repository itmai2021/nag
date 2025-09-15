@php
// Group data berdasarkan merk
$grouped = $automotive->groupBy('merk');
$newGrouped = collect();

foreach ($grouped as $merk => $companies) {
if ($companies->count() == 2 && (function_exists('str_contains') ? str_contains($merk, ',') : \Illuminate\Support\Str::contains($merk, ','))) {
foreach (explode(',', $merk) as $m) {
$newGrouped->put(trim($m), $companies);
}
} else {
$newGrouped->put($merk, $companies);
}
}

// Daftar logo merk (hardcode path sesuai kebutuhan)
$merkLogos = [
'Honda Motor' => 'assets/images/honda_motor.png',
'Honda' => 'assets/images/honda.png',
'Mitsubishi' => 'assets/images/mitsubishi.png',
'Mazda' => 'assets/images/mazda.png',
'Daihatsu' => 'assets/images/daihatsu.png',
'Isuzu' => 'assets/images/isuzu.png',
'Suzuki' => 'assets/images/suzuki.png',
'Wuling' => 'assets/images/wuling.png',
'Hino' => 'assets/images/hino.png',
];
@endphp


<section class="section__container destination__container mt-5 d-none" id="automotive"
    style="margin-bottom: 20vh;">
    <h2 class="section__header mb-5 text-center">Automotive Trading</h2>

    <div class="text-left mb-4">
        <p class="mb-0 text-start" id="back-to-pilar" style="cursor: pointer; margin-left: 10vh;">
            <i class="ri-arrow-left-line"></i> {{ __('messages.landing.kembali') }}
        </p>
    </div>

    <div class="container cont_sektor py-4">
        <div class="row g-5">

            @foreach ($newGrouped as $merk => $companies)
            @php $count = $companies->count(); @endphp

            <div class="col-12 col-md-6">
                <div class="d-flex justify-content-center align-items-stretch gap-3">

                    {{-- Card Merk --}}
                    <div class="logo-card shadow-sm rounded d-flex justify-content-center align-items-center p-2"
                        style="flex:0 0 45%; height:120px;" id="card-merk">
                        <img src="{{ asset($merkLogos[$merk] ?? 'assets/images/default.png') }}"
                            alt="Logo {{ $merk }}" class="img-fluid"
                            style="max-height: 100%; object-fit: contain;">
                    </div>

                    {{-- Card Companies --}}
                    <div class="d-flex flex-column gap-2"
                        style="flex:0 0 45%; height:120px;">

                        @if($count === 1)
                        @foreach ($companies as $company)
                        <div class="logo-card shadow-sm rounded d-flex justify-content-center align-items-center p-2 h-100"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal{{ $company->id }}">
                            <img src="{{ asset('assets/file/logo/' . $company->logo) }}"
                                alt="Logo {{ $company->company_shortname }}"
                                class="img-fluid logo-click"
                                style="max-height: 100%; object-fit: contain;">
                        </div>
                        @endforeach

                        @elseif($count === 2)
                        @foreach ($companies as $company)
                        <div class="logo-card shadow-sm rounded d-flex justify-content-center align-items-center p-2 flex-fill"
                            data-bs-toggle="modal"
                            data-bs-target="#imageModal{{ $company->id }}"
                            style="flex:1;">
                            <img src="{{ asset('assets/file/logo/' . $company->logo) }}"
                                alt="Logo {{ $company->company_shortname }}"
                                class="img-fluid logo-click"
                                style="max-height: 100%; object-fit: contain;">
                        </div>
                        @endforeach

                        @else
                        <div class="row row-cols-2 g-2 h-100">
                            @foreach ($companies as $company)
                            <div class="col">
                                <div class="logo-card shadow-sm rounded d-flex justify-content-center align-items-center p-2 h-100"
                                    data-bs-toggle="modal"
                                    data-bs-target="#imageModal{{ $company->id }}">
                                    <img src="{{ asset('assets/file/logo/' . $company->logo) }}"
                                        alt="Logo {{ $company->company_shortname }}"
                                        class="img-fluid logo-click"
                                        style="max-height: 70px; object-fit: contain;">
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>

</section>

@foreach ($automotive as $auto)
@if($auto->company_shortname == 'TJHMG')
<div class="modal fade" id="imageModal{{ $auto->id }}" tabindex="-1"
    aria-labelledby="imageModalLabel{{ $auto->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content shadow-lg rounded-3">
            <!-- Modal Header -->
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold" id="imageModalLabel{{ $auto->id }}">
                    {{ $auto->company_name }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="{{ __('messages.landing.tutup') }}"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body p-0">
                <!-- Logo TJHMG -->
                <div class="text-center py-3" style="border-bottom: 1px solid #ddd;">
                    <div style="flex: 0 0 20%;">
                        <img src="{{ asset('assets/file/logo/' . $auto->logo) }}" alt="Logo"
                            class="img-fluid rounded shadow-sm"
                            style="max-height: 150px; object-fit: contain;">
                    </div>
                    <hr class="m-0">

                    <!-- Konten Scrollable -->
                    <div class="overflow-auto px-4 py-3"
                        style="max-height: 48vh; display: flex; flex-direction: column; gap: 20px;">

                        @php
                        $tjhmgChildren = ['atj', 'tjma', 'lgc', 'atja'];
                        @endphp

                        @foreach ($tjhmgChildren as $child)
                        <div class="d-flex gap-4 align-items-start">
                            <div style="flex: 0 0 20%;">
                                <img src="{{ asset('assets/file/logo/' . $tjhmg[$child]->logo) }}" alt="Logo"
                                    style="max-width: 75vh; max-height: 75vh; object-fit: contain;" class="rounded shadow-sm">
                            </div>
                            <div style="flex: 1;">
                                <p class="text-muted mb-0" style="text-align: justify;">
                                    {{ $tjhmg[$child]->description }}
                                </p>
                                <!-- @if ($tjhmg[$child]->web_url)
                                <div class="text-end mt-2">
                                    <a href="{{ $tjhmg[$child]->web_url }}" target="_blank" class="text-decoration-none fw-semibold">
                                        {{ __('messages.landing.selengkapnya') }} <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                                @endif -->
                            </div>
                        </div>
                        @endforeach
                        <div class="text-end mt-2">
                            <a href="https://tunasjaya.com/" target="_blank" class="text-decoration-none fw-semibold">
                                {{ __('messages.landing.selengkapnya') }} <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

<div class="modal fade" id="imageModal{{ $auto->id }}" tabindex="-1"
    aria-labelledby="imageModalLabel{{ $auto->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content shadow-lg rounded-3">
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold" id="imageModalLabel{{ $auto->id }}">
                    {{ $auto->company_name }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="{{ __('messages.landing.tutup') }}"></button>
            </div>
            <div class="modal-body"
                style="min-height: 250px; display: flex; align-items: center; justify-content: center; gap: 20px;">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('assets/file/logo/' . $auto->logo) }}" alt="Logo"
                            class="img-fluid rounded shadow-sm"
                            style="max-height: 200px; object-fit: contain;">
                    </div>
                    <!-- Deskripsi -->
                    <div class="col-md-8">
                        <p class="text-muted mb-0" style="text-align: justify;">
                            {{ $auto->description }}
                        </p>

                        @if($auto->company_shortname == 'AAT')
                        @php
                        $aatLinks = [
                        ['url' => 'https://armadaautotara.co.id/', 'label' => 'aat_daihatsu'],
                        ['url' => 'https://daihatsuautotaratangerang.co.id/', 'label' => 'aat_daihatsu_cikokol'],
                        ['url' => 'https://daihatsuautotaradepok.co.id/', 'label' => 'aat_daihatsu_depok'],
                        ['url' => 'https://daihatsuautotarasawahbesar.co.id/', 'label' => 'aat_daihatsu_sawahbesar'],
                        ['url' => 'https://daihatsuautotarakalimalang.co.id/', 'label' => 'aat_daihatsu_kalimalang'],
                        ['url' => 'https://daihatsuautotarakstubun.co.id/', 'label' => 'aat_daihatsu_kstubun'],
                        ['url' => 'https://autotaraisuzu.co.id/', 'label' => 'aat_isuzu'],
                        ];
                        @endphp
                        <div class="mt-4">
                            <div class="row row-cols-1 justify-content-end">
                                @foreach ($aatLinks as $link)
                                <div class="col text-end">
                                    <div class="card shadow-sm">
                                        <div class="card-body p-0">
                                            <a href="{{ $link['url'] }}" target="_blank" class="text-decoration-none fw-semibold">
                                                {{ __('messages.landing.link_labels.' . $link['label']) }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        @elseif($auto->company_shortname == 'AMJA')
                        @php
                        $mazdaLinks = [
                        ['url' => 'https://www.mazdasemarang.com', 'label' => 'mazda_semarang'],
                        ['url' => 'https://www.mazdasoloofficial.com', 'label' => 'mazda_solo'],
                        ['url' => 'https://www.mazdayogyakarta.com', 'label' => 'mazda_yogyakarta'],
                        ];
                        @endphp
                        <div class="mt-4">
                            <div class="row row-cols-1 justify-content-end">
                                @foreach ($mazdaLinks as $link)
                                <div class="col text-end">
                                    <div class="card shadow-sm">
                                        <div class="card-body p-0">
                                            <a href="{{ $link['url'] }}" target="_blank" class="text-decoration-none fw-semibold">
                                                {{ __('messages.landing.link_labels.' . $link['label']) }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        @else
                        @if ($auto->web_url)
                        <div class="text-end mt-3">
                            <a href="{{ $auto->web_url }}" target="_blank"
                                class="text-decoration-none fw-semibold">
                                {{ __('messages.landing.selengkapnya') }} <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                        @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach