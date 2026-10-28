<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/buku', 'buku');
Route::view('/kontak', 'kontak');
Route::view('/tentang', 'tentang');
Route::view('/login', 'login');