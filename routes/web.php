<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiDBController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('menu', [DosenController::class, 'menu']);

Route::get('idx', [DosenController::class, 'idx']);
Route::get('example', [DosenController::class, 'example']);
Route::get('intro', [DosenController::class, 'intro']);
Route::get('linktree', [DosenController::class, 'linktree']);
Route::get('news', [DosenController::class, 'news']);

Route::get('pert5', [DosenController::class, 'pert5']);
Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

//Route::get('/pegawai/{nama}', [PegawaiDBController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//Route::get('/pegawai', [PegawaiDBController::class, 'index']);

Route::get('responsive', [DosenController::class, 'responsive']);
Route::get('template', [DosenController::class, 'template']);
Route::get('089', [DosenController::class, 'nol89']);

//CMD
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
