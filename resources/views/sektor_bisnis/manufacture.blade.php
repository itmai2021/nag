<section class="section__container destination__container mt-5 d-none" id="manufacture"
    style="margin-bottom: 20vh;">
    <h2 class="section__header mb-5 text-center">Manufacture</h2>
    <div class="text-left mb-4 ml-4">
        <p class="mb-0 text-start" id="back-to-pilar2" style="cursor: pointer;margin-left: 10vh;">
            <i class="ri-arrow-left-line"></i>{{ __('messages.landing.kembali') }}
        </p>
    </div>
    <div class="container cont_sektor py-4 px-5">
        <div class="row gx-5 gy-5">
            @foreach ($manufacture as $manuf)
            <div class="col-12 col-sm-6 col-md-4 text-center">
                <div class="logo-card shadow-sm rounded d-flex justify-content-center align-items-center p-3"
                    style="aspect-ratio: 2 / 1; max-width: 370px; margin:auto;"
                    data-bs-toggle="modal"
                    data-bs-target="#imageModal2{{ $manuf->id }}">
                    <img src="{{ asset('assets/file/logo/' . $manuf->logo) }}"
                        alt="Logo {{ $manuf->company_shortname }}"
                        class="img-fluid logo-click">
                </div>
            </div>
            @endforeach
        </div>
    </div>





</section>
@foreach ($manufacture as $manuf)
<div class="modal fade" id="imageModal2{{ $manuf->id }}" tabindex="-1"
    aria-labelledby="imageModalLabel{{ $manuf->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content shadow-lg rounded-3">
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold" id="imageModalLabel{{ $manuf->id }}">
                    {{ $manuf->company_name }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Tutup"></button>
            </div>
            <div class="modal-body"
                style="min-height: 250px; display: flex; align-items: center;justify-content: center;gap: 20px;">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('assets/file/logo/' . $manuf->logo) }}" alt="Logo"
                            class="img-fluid rounded shadow-sm"
                            style="max-height: 200px; object-fit: contain;">
                    </div>
                    <!-- Deskripsi -->
                    <div class="col-md-8">
                        <p class="text-muted mb-0" style="text-align: justify;">
                            {{ $manuf->description }}
                        </p>
                        @if ($manuf->web_url)
                        <div class="text-end mt-3">
                            <a href="{{ $manuf->web_url }}" target="_blank"
                                class="text-decoration-none fw-semibold">
                                {{ __('messages.landing.selengkapnya') }} <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach