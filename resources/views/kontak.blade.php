@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<h1 class="mb-4">Hubungi Kami</h1>

<div class="row">
    <div class="col-md-6 mb-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title mb-3">Kirim Pesan</h5>
                <form action="#" method="get">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" placeholder="Nama lengkap">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="email@contoh.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pesan</label>
                        <textarea class="form-control" rows="4" placeholder="Tulis pesanmu..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title mb-3">Informasi Toko</h5>
                <p><strong>Alamat:</strong><br>Jl. Raya Kampus No. 123, Surabaya</p>
                <p><strong>Telepon:</strong><br>(031) 123-4567</p>
                <p><strong>Email:</strong><br>info@tokobuku.test</p>
                <p><strong>Jam Buka:</strong><br>Senin - Sabtu, 09.00 - 20.00 WIB</p>
            </div>
        </div>
    </div>
</div>
@endsection