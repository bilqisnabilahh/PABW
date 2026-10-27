<?php

use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (LaporanController $controller) {
    return auth()->guest()
        ? redirect()->route('register')
        : $controller->landing();
})->name('home');
Route::get('/lapor', [LaporanController::class, 'create'])->name('laporan.create');
Route::post('/lapor', [LaporanController::class, 'store'])->name('laporan.store');
Route::get('/dashboard', fn () => redirect()->route('home'))->middleware('auth')->name('dashboard');
Route::get('/laporan', fn () => redirect()->route('petugas.laporan.index'))->middleware('auth');
Route::get('/laopran', fn () => redirect()->route('petugas.laporan.index'))->middleware('auth');

Route::middleware('auth')->prefix('petugas')->name('petugas.')->group(function () {
    Route::resource('laporan', LaporanController::class)->except(['create', 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
