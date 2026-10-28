@extends('layouts.app')

@section('title', 'Buku')

@section('content')
<h1 class="mb-4">Daftar Buku</h1>

<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Laskar Pelangi</h5>
                <h6 class="card-subtitle mb-2 text-muted">Andrea Hirata</h6>
                <p class="card-text">Novel tentang perjuangan anak-anak Belitung meraih pendidikan.</p>
                <p class="fw-bold text-primary">Rp 85.000</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Bumi Manusia</h5>
                <h6 class="card-subtitle mb-2 text-muted">Pramoedya Ananta Toer</h6>
                <p class="card-text">Kisah Minke di masa kolonial Hindia Belanda.</p>
                <p class="fw-bold text-primary">Rp 110.000</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Filosofi Teras</h5>
                <h6 class="card-subtitle mb-2 text-muted">Henry Manampiring</h6>
                <p class="card-text">Pengantar filosofi Stoa untuk kehidupan modern.</p>
                <p class="fw-bold text-primary">Rp 98.000</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Clean Code</h5>
                <h6 class="card-subtitle mb-2 text-muted">Robert C. Martin</h6>
                <p class="card-text">Panduan menulis kode program yang rapi dan mudah dibaca.</p>
                <p class="fw-bold text-primary">Rp 250.000</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Atomic Habits</h5>
                <h6 class="card-subtitle mb-2 text-muted">James Clear</h6>
                <p class="card-text">Cara membangun kebiasaan baik dan menghilangkan kebiasaan buruk.</p>
                <p class="fw-bold text-primary">Rp 105.000</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Belajar Laravel</h5>
                <h6 class="card-subtitle mb-2 text-muted">Tim Penulis</h6>
                <p class="card-text">Dasar-dasar membuat aplikasi web dengan framework Laravel.</p>
                <p class="fw-bold text-primary">Rp 120.000</p>
            </div>
        </div>
    </div>
</div>
@endsection