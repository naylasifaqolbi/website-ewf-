
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicPageController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| BERANDA
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

/*
|--------------------------------------------------------------------------
| INFORMASI PERUSAHAAN
|--------------------------------------------------------------------------
*/

Route::get('/tentang-kami', [PublicPageController::class, 'about'])
    ->name('about');

Route::get('/profil-perusahaan', [PublicPageController::class, 'profile'])
    ->name('profile');

Route::get('/produk-layanan', [PublicPageController::class, 'products'])
    ->name('products');

Route::get('/fasilitas-layanan', [PublicPageController::class, 'facilities'])
    ->name('facilities');

Route::get('/legalitas', [PublicPageController::class, 'legality'])
    ->name('legality');

Route::get('/wakil-pialang', [PublicPageController::class, 'brokers'])
    ->name('brokers');

Route::get('/badan-regulasi', [PublicPageController::class, 'regulators'])
    ->name('regulators');

Route::get('/data-historis', [PublicPageController::class, 'historicalData'])
    ->name('historical-data');

Route::get('/kontak', [PublicPageController::class, 'contact'])
    ->name('contact');

/*
|--------------------------------------------------------------------------
| BERITA
|--------------------------------------------------------------------------
*/

Route::get('/berita', [NewsController::class, 'index'])
    ->name('news.index');

Route::get('/berita/{slug}', [NewsController::class, 'show'])
    ->name('news.show');

/*
|--------------------------------------------------------------------------
| KARIER DAN MAGANG
|--------------------------------------------------------------------------
*/

Route::get('/karier', [CareerController::class, 'index'])
    ->name('careers');

Route::get('/karier/lowongan-kerja', [CareerController::class, 'jobs'])
    ->name('careers.jobs');

Route::get('/karier/magang-mahasiswa', [CareerController::class, 'studentInternship'])
    ->name('careers.internship-student');

Route::get('/karier/magang-sma-smk', [CareerController::class, 'schoolInternship'])
    ->name('careers.internship-school');

// AUTH
Route::view('/login', 'auth.login')->name('login');

// BERITA
Route::get('/berita', [NewsController::class, 'index'])
    ->name('news.index');

Route::get('/berita/{slug}', [NewsController::class, 'show'])
    ->name('news.show');