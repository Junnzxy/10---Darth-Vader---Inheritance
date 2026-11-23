<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes (Alur: Route -> Controller -> Model -> View)
|--------------------------------------------------------------------------
|
| 1. Route Home  : Pengenalan awal & navigasi
| 2. Route About : Penjelasan tujuan, isi web, dan anggota tim
| 3. Route Blog  : Konten karakter fiksi yang dipilih (Darth Vader)
| 4. Route Posts : Single post detail (One to Many: Post belongsTo Author)
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

// Rute untuk single post (Relasi One to Many)
Route::get('/posts/{post:slug}', [BlogController::class, 'show'])->name('posts.show');
Route::get('/blog/{post:slug}', [BlogController::class, 'show']);
