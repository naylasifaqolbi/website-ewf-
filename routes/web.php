
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicPageController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApplicantPageController;


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


/*
|--------------------------------------------------------------------------
| AUTHENTICATION
|--------------------------------------------------------------------------
*/

Route::controller(AuthController::class)->group(function () {

    // Halaman Login.
    Route::get('/login', 'showLogin')
        ->name('login');

    // Proses Login.
    Route::post('/login', 'login')
        ->name('login.process');

    // Halaman Registrasi.
    Route::get('/register', 'showRegister')
        ->name('register');

    // Proses Registrasi.
    Route::post('/register', 'register')
        ->name('register.process');

    // Proses Logout.
    Route::post('/logout', 'logout')
        ->name('logout');

});


/*
|--------------------------------------------------------------------------
| DASHBOARD USER
|--------------------------------------------------------------------------
*/

Route::get('/dashboard/user', [DashboardController::class, 'user'])
    ->middleware('role:user')
    ->name('dashboard.user');


Route::get('/riwayat-pengajuan', [ApplicantPageController::class, 'riwayatPengajuan'])
    ->middleware('auth')
    ->name('riwayat.pengajuan');
    

/*
|--------------------------------------------------------------------------
| DASHBOARD ADMIN
|--------------------------------------------------------------------------
*/

Route::get('/dashboard/admin', [DashboardController::class, 'admin'])
    ->middleware('role:admin')
    ->name('dashboard.admin');


/*
|--------------------------------------------------------------------------
| DASHBOARD HR
|--------------------------------------------------------------------------
*/

Route::get('/dashboard/hr', [DashboardController::class, 'hr'])
    ->middleware('role:hr')
    ->name('dashboard.hr');


// Halaman Formulir Pendaftaran Magang
Route::get('/pendaftaran-magang', [ApplicantPageController::class, 'pendaftaranMagang'])
    ->middleware('auth')
    ->name('pendaftaran.magang');

// Proses Pengiriman Formulir Pendaftaran Magang
Route::post('/pendaftaran-magang', [ApplicantPageController::class, 'storeInternship'])
    ->middleware('auth')
    ->name('pendaftaran.magang.store');


// Halaman Formulir Lamaran Kerja
Route::get('/lamaran-kerja', [ApplicantPageController::class, 'lamaranKerja'])
    ->middleware('auth')
    ->name('lamaran.kerja');

    Route::post('/lamaran-kerja', [ApplicantPageController::class, 'storeJob'])
    ->middleware('auth')
    ->name('lamaran.kerja.store');