<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Alihkan dari root ke URL /beranda
Route::redirect('/', '/beranda');

// Gunakan BerandaController untuk menangani URL /beranda
Route::get('/beranda', [PageController::class, 'beranda'])->name('beranda');
Route::prefix('tentang-kami')->name('tentang-kami.')->group(function () {
    Route::get('/profil-organisasi', [PageController::class, 'profilOrganisasi'])->name('profil');
    Route::get('/anggota-organisasi', [PageController::class, 'anggotaOrganisasi'])->name('anggota');
    Route::get('/kepengurusan', [PageController::class, 'kepengurusan'])->name('kepengurusan');
    Route::get('/galeri', [PageController::class, 'galeri'])->name('galeri');
});
Route::get('/kegiatan', [PageController::class, 'kegiatan'])->name('kegiatan');
Route::get('/berita', [PageController::class, 'berita'])->name('berita');
Route::get('/kontak-kami', [PageController::class, 'kontak'])->name('kontak-kami');

Route::get('/login', [LoginController::class, 'login'])->name('login');