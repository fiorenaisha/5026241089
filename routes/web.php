<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('menu', [MenuController::class, 'menu']);

Route::get('idx', [MenuController::class, 'idx']);
Route::get('example', [MenuController::class, 'example']);
Route::get('intro', [MenuController::class, 'intro']);
Route::get('linktree', [MenuController::class, 'linktree']);
Route::get('news', [MenuController::class, 'news']);
Route::get('pert5', [MenuController::class, 'pert5']);
Route::get('responsive', [MenuController::class, 'responsive']);
Route::get('template', [MenuController::class, 'template']);
Route::get('biodata', [MenuController::class, 'biodata']);
Route::get('089', [MenuController::class, 'nol89']);

Route::get('dosen', [DosenController::class, 'index']);
