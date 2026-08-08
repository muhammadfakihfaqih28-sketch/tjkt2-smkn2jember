<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AuthController;

// Halaman Utama & Public
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/daftar-siswa', [SiswaController::class, 'publicIndex'])->name('siswa.public');

// Route Auth / Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Admin (Khusus setelah login)
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/siswa', [SiswaController::class, 'index'])->name('siswa.index');
    Route::post('/admin/siswa', [SiswaController::class, 'store'])->name('siswa.store');
    Route::delete('/admin/siswa/{siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
});