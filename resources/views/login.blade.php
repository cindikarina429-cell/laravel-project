@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <h3 class="text-center mb-4">Login</h3>
                <form action="#" method="get">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="email@contoh.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="ingat">
                        <label class="form-check-label" for="ingat">Ingat saya</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Masuk</button>
                </form>
                <p class="text-center text-muted mt-3 mb-0">
                    Belum punya akun? <a href="#">Daftar</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection