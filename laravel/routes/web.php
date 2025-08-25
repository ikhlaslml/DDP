<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\CapaianController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\MonografiController;
use App\Http\Controllers\BeritaartikelController;
use App\Http\Controllers\InfografisController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GambarController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArtikelTampilController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\BukuTampilController;
use App\Http\Controllers\MonografisTampilController;
use App\Http\Controllers\BeritaTampilController;
use App\Http\Controllers\JurnalTampilController;
use App\Http\Controllers\InfografisTampilController;
use App\Http\Controllers\GaleriController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/opini', [ArtikelTampilController::class, 'index'])->name('opini.index');
Route::get('/datadesapresisi', [BukuTampilController::class, 'index'])->name('datadesapresisi.index');

Route::get('/Monografis', [MonografisTampilController::class, 'index'])->name('Monografis.index');
Route::get('/Berita', [BeritaTampilController::class, 'index'])->name('Berita.index');
Route::get('/Berita/show/{id}', [BeritaTampilController::class, 'index'])->name('Berita.show');
Route::get('/Jurnal', [JurnalTampilController::class, 'index'])->name('Jurnal.index');
Route::get('/Jurnal/show/{id}', [JurnalTampilController::class, 'index'])->name('Jurnal.show');

Route::get('/Infografis', [InfografisTampilController::class, 'index'])->name('Infografis.index');
Route::get('/opini/show/{id}', [ArtikelTampilController::class, 'show'])->name('opini.show');

Route::get('/Galeri', [GaleriController::class, 'index'])->name('Galeri.index');


Route::get('/admin', function () {
    return view('dashboard');
});

Route::resource('artikel', ArtikelController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('capaian', CapaianController::class);
Route::resource('mitra', MitraController::class);
Route::resource('beritaartikel', BeritaartikelController::class);
Route::resource('monografi', MonografiController::class);
Route::resource('infografis', InfografisController::class);
Route::resource('gambar', GambarController::class);
Route::resource('testimoni', TestimoniController::class);
Route::resource('jurnal', JurnalController::class);
Route::resource('buku', BukuController::class);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');


});
