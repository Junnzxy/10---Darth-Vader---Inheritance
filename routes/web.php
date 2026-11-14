<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes (Alur: Route -> Controller -> View)
|--------------------------------------------------------------------------
|
| 1. Route Home  : Pengenalan awal & navigasi
| 2. Route About : Penjelasan tujuan, isi web, dan anggota tim
| 3. Route Blog  : Konten karakter fiksi yang dipilih (Darth Vader)
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
