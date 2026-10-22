<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\laporbanjirController as LaporanController;

Route::get('/lapor', [LaporanController::class, 'form'])
    ->name('laporan.form');

Route::post('/lapor', [LaporanController::class, 'simpan'])
    ->name('laporan.simpan');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegister'])
        ->name('register');

    Route::post('/register', [RegisterController::class, 'register'])
        ->name('register.process');

    Route::get('/login', [LoginController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [LoginController::class, 'login'])
        ->name('login.process');
});

Route::middleware('auth')->group(function () {
    Route::get('/laporan', [LaporanController::class, 'index'])
        ->name('laporan.index');

    Route::get('/profil', function () {
        return view('profile');
    })->name('profil');

    Route::post('/logout', [LoginController::class, 'logout'])
        ->name('logout');
});
