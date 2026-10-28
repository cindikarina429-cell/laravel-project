@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<div class="row mb-4">
    <div class="col-md-12">
        <h1 class="display-6 fw-bold text-primary mb-3">Tentang Toko Buku</h1>
        <hr class="w-25 my-2">
    </div>
</div>

<!-- Profil Section dengan Grid Card -->
<div class="row g-4 mb-5">
    <div class="col-lg-7">
        <div class="card border-0 shadow-sm h-100 bg-light">
            <div class="card-body p-4">
                <h4 class="card-title text-dark mb-3"><i class="bi bi-info-circle me-2"></i>Profil Singkat</h4>
                <p class="card-text text-secondary lh-lg">
                    Berdiri sejak tahun 2026, <strong>Toko Buku</strong> hadir untuk memenuhi kebutuhan literasi harian Anda. Kami mendedikasikan diri untuk menyediakan koleksi lengkap mulai dari novel best-seller, buku referensi akademik, hingga literatur teknologi terkini dengan harga yang ramah di kantong pelajar dan mahasiswa.
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="card border-0 shadow-sm h-100 border-start border-primary border-4">
            <div class="card-body p-4">
                <h5 class="card-title text-dark mb-3">Visi & Misi</h5>
                <p class="mb-2">
                    <strong class="text-primary">Visi:</strong> Menjadi toko buku pilihan utama mahasiswa dan pelajar di Indonesia.
                </p>
                <p class="mb-0">
                    <strong class="text-primary">Misi:</strong> Menyediakan buku berkualitas dengan pelayanan cepat, ramah, dan terpercaya.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Tim Pengembang Section -->
<div class="d-flex align-items-center justify-content-between mb-3">
    <h4 class="m-0 text-dark">Tim Pengembang</h4>
    <span class="badge bg-secondary">Praktikum PAW 2026</span>
</div>

<div class="card border-0 shadow-sm">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-primary text-dark">
                <tr>
                    <th scope="col" class="py-3 ps-3" style="width: 10%;">No</th>
                    <th scope="col" class="py-3" style="width: 30%;">Nama Anggota</th>
                    <th scope="col" class="py-3" style="width: 30%;">NIM</th>
                    <th scope="col" class="py-3 pe-3" style="width: 30%;">Tanggung Jawab Halaman</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="ps-3 fw-semibold">1</td>
                    <td>Arin</td>
                    <td><code>108052500067</code></td>
                    <td><span class="badge bg-light text-dark border">Setup dan Home</span></td>
                </tr>
                <tr>
                    <td class="ps-3 fw-semibold">2</td>
                    <td>Yashawini</td>
                    <td><code>108052500138</code></td>
                    <td><span class="badge bg-light text-dark border">Daftar Buku</span></td>
                </tr>
                <tr>
                    <td class="ps-3 fw-semibold">3</td>
                    <td>Nafisa</td>
                    <td><code>108052500118</code></td>
                    <td><span class="badge bg-light text-dark border">Kontak</span></td>
                </tr>
                <tr>
                    <td class="ps-3 fw-semibold">4</td>
                    <td>Aufa</td>
                    <td><code>108052500142</code></td>
                    <td><span class="badge bg-light text-dark border">Tentang Kami</span></td>
                </tr>
                <tr>
                    <td class="ps-3 fw-semibold">5</td>
                    <td>Ardo</td>
                    <td><code>108052500120</code></td>
                    <td><span class="badge bg-light text-dark border">Login</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection