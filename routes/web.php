<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\PenggarisController;
use App\Http\Controllers\PenggarisDBController;
use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\NilaiKuliahDBController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\KeranjangBelanjaDBController;


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

//penggaris
Route::get('/penggaris', [PenggarisDBController::class, 'indexPenggaris']);
Route::get('/penggaris/tambah_penggaris', [PenggarisController::class, 'tambah_penggaris']);
Route::post('/penggaris/store_penggaris', [PenggarisDBController::class, 'store_penggaris']);
Route::get('/penggaris/edit_penggaris/{id}', [PenggarisDBController::class, 'edit_penggaris']);
Route::post('/penggaris/update_penggaris', [PenggarisDBController::class, 'update_penggaris']);
Route::get('/penggaris/hapus_penggaris/{id}', [PenggarisDBController::class, 'hapus_penggaris']);
Route::get('/penggaris/cari_penggaris', [PenggarisDBController::class, 'cari_penggaris']);

// nilaikuliah
Route::get('/nilaikuliah', [NilaiKuliahDBController::class, 'index']);
Route::get('/nilaikuliah/tambah', [NilaiKuliahController::class, 'tambah']);
Route::post('/nilaikuliah/store', [NilaiKuliahDBController::class, 'store']);

// keranjangbelanja
Route::get('/keranjangbelanja', [KeranjangBelanjaDBController::class, 'index']);
Route::get('/keranjangbelanja/tambah', [KeranjangBelanjaController::class, 'tambah']);
Route::post('/keranjangbelanja/store', [KeranjangBelanjaDBController::class, 'store']);
Route::get('/keranjangbelanja/hapus/{id}', [KeranjangBelanjaDBController::class, 'hapus']);
