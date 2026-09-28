<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cobacontroller;
use App\Http\Controllers\DataController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DataBanjir;
use App\Http\Controllers\LaporFasilitas;

Route::get('/coba', [cobacontroller::class, 'index']);

Route::get('/', function () {
    return view('welcome');
})->name('welcome.page');

Route::get('/final', [cobacontroller::class, 'finalController']);

Route::get('/hello', function () {
    return 'hello world,  bilkids';
});

Route::get('/user/{name}', function ($name) {
    return "Nama saya $name";
});

Route::get('/greet/{name?}', function ($name = Guest) {
    return "Halo, $name";
});

Route::get('/about', function () {
    return view ('about', ['name' => 'abil']);
});

Route::get('/profile/{name}', function ($name = 'Guest') {
    return "Nama saya $name";
});

Route::get('/form', [DataController::class, 'form']);
Route::post('/post', [DataController::class, 'proses']);

Route::get('/form/mahasiswa', [MahasiswaController::class, 'form']);
Route::post('/post', [MahasiswaController::class, 'proses']);

Route::get('/form/banjir', [DataBanjir::class, 'form']);
Route::post('/post', [DataBanjir::class, 'proses']);

Route::get('/form/fasilitas', [LaporFasilitas::class, 'form']);
Route::post('/lapor-fasilitas/proses', [LaporFasilitas::class, 'proses']);