@extends('layouts.app_landing')

@section('content')
<div class="container py-5 mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="cards border-0 mt-3">
                <div class="card-body p-4" style="background-color: white;">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <h2 class="text-center mb-3 fw-bold">Hubungi Kami</h2>
                    <form action="{{ route('contact_us.store') }}" method="POST" class="footer__form">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea name="message" id="message" rows="4" class="form-control" placeholder="Tulis pesan" required></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection