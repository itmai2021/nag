<section class="section__container destination__container mt-5 d-none" id="finance"
    style="margin-bottom: 20vh;">
    <h2 class="section__header mb-5 text-center">Financial</h2>
    <div class="text-left mb-4 ml-4">
        <p class="mb-0 text-start" id="back-to-pilar3" style="cursor: pointer;margin-left: 10vh;">
            <i class="ri-arrow-left-line"></i>{{ __('messages.landing.kembali') }}
        </p>
    </div>
    <div class="container cont_sektor py-4">
        <div class="row justify-content-center g-4">
            @foreach ($finance as $fn)
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center">
                <div class="logo-card shadow-sm rounded d-flex justify-content-center align-items-center"
                    data-bs-toggle="modal"
                    data-bs-target="#imageModal3{{ $fn->id }}">
                    <img src="{{ asset('assets/file/logo/' . $fn->logo) }}"
                        alt="Logo {{ $fn->company_shortname }}"
                        class="img-fluid logo-click">
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section>
@foreach ($finance as $fnc)
<div class="modal fade" id="imageModal3{{ $fnc->id }}" tabindex="-1"
    aria-labelledby="imageModalLabel{{ $fnc->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content shadow-lg rounded-3">
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold" id="imageModalLabel{{ $fnc->id }}">
                    {{ $fnc->company_name }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Tutup"></button>
            </div>
            <div class="modal-body"
                style="min-height: 250px; display: flex; align-items: center;justify-content: center;gap: 20px;">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-md-4 text-center">
                        <img src="{{ asset('assets/file/logo/' . $fnc->logo) }}" alt="Logo"
                            class="img-fluid rounded shadow-sm"
                            style="max-height: 200px; object-fit: contain;">
                    </div>
                    <!-- Deskripsi -->
                    <div class="col-md-8">
                        <p class="text-muted mb-0" style="text-align: justify;">
                            {{ $fnc->description }}
                        </p>
                        @if ($fnc->web_url)
                        <div class="text-end mt-3">
                            <a href="{{ $fnc->web_url }}" target="_blank"
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