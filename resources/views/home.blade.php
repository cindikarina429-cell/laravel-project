@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="p-5 mb-4 bg-white rounded-3 shadow-sm text-center">
    <h1 class="display-5 fw-bold">Selamat Datang di Toko Buku</h1>
    <p class="lead text-muted">
        Temukan ribuan buku favoritmu mulai dari novel, buku pelajaran,
        sampai buku pemrograman dengan harga terjangkau.
    </p>
    <a href="/buku" class="btn btn-primary btn-lg">Lihat Buku</a>
</div>

<div class="row text-center">
    <div class="col-md-4 mb-3">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">📖 Koleksi Lengkap</h5>
                <p class="card-text">Ribuan judul dari berbagai kategori.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">💸 Harga Terjangkau</h5>
                <p class="card-text">Diskon spesial untuk mahasiswa.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">🚚 Pengiriman Cepat</h5>
                <p class="card-text">Pesanan sampai dalam 1-3 hari.</p>
            </div>
        </div>
    </div>
</div>
@endsection