<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\TentangKamiController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('beranda');
});
Route::get('/tentangkami', [TentangKamiController::class, 'index'])->name('tentangkami');

Route::get('hubungikami', function () {
    return view('hubungikami');
});
Route::get('berita', function () {
    return view('berita');
});

// Route untuk halaman portofolio
Route::get('/portofolio/proyek', [PortofolioController::class, 'proyek'])->name('portofolio.proyek');
Route::get('/portofolio/admin', [PortofolioController::class, 'admin'])->name('portofolio.admin');
Route::get('/portofolio/index', [PortofolioController::class, 'index'])->name('portofolio.index');
Route::get('/portofolio/{id}', [PortofolioController::class, 'show'])->name('portofolio.show');


// Menambahkan resource route untuk Proyek agar route proyek.store tersedia
Route::get('/portofolio/proyek', [ProyekController::class, 'index']);
Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolio');
Route::get('/proyek/create', [ProyekController::class, 'create'])->name('proyek.create');
Route::resource('proyek', ProyekController::class);
Route::get('/proyek/{proyek}/edit', [ProyekController::class, 'edit'])->name('proyek.edit');
Route::put('/proyek/{proyek}', [ProyekController::class, 'update'])->name('proyek.update');

// Route untuk beranda tanpa perlu login
Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Redirect otomatis setelah login
Route::get('/dashboard', function () {
    return redirect()->route('portofolio/proyek');
})->middleware(['auth', 'verified']); 

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');
