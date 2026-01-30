<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\KonfigurasiController;
use App\Http\Controllers\LandingPageController;

Route::get('/', [LandingPageController::class, 'viewBeranda'])->name('view.beranda');
Route::get('berita', [LandingPageController::class, 'listBerita'])->name('list.berita');
Route::get('berita/list', [LandingPageController::class, 'listSemuaBerita'])->name('list.semua.berita');
Route::get('berita/{slug}', [LandingPageController::class, 'detailBerita'])->name('detail.berita');
Route::get('fasilitas/list', [FasilitasController::class, 'listFasilitas'])->name('list.fasilitas');
Route::get('prestasi/list', [PrestasiController::class, 'listPrestasi'])->name('list.prestasi');
Route::get('galeri/list', [GaleriController::class, 'listGaleri'])->name('list.galeri');
Route::get('guru/list', [GuruController::class, 'listGuru'])->name('list.guru');
Route::get('/daftar-alumni', [AlumniController::class, 'daftarAlumni'])->name('daftar.alumni');
Route::resource('admin/alumni', AlumniController::class);

Route::get('/sitemap.xml', [SitemapController::class, 'index']);
Route::get('/sitemap-pages.xml', [SitemapController::class, 'pages']);
Route::get('/sitemap-berita.xml', [SitemapController::class, 'berita']);
Route::get('/sitemap-media.xml', [SitemapController::class, 'media']);


Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'storeLogin'])->name('store.login');
});
Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('', [BerandaController::class, 'index'])->name('beranda.admin');
        Route::resource('kategori', KategoriController::class);
        Route::resource('berita', BeritaController::class);
        Route::resource('fasilitas', FasilitasController::class);
        Route::resource('galeri', GaleriController::class);
        Route::resource('guru', GuruController::class);
        Route::patch('alumni/{id}/toggle', [AlumniController::class, 'toggleDitampilkan'])->name('alumni.toggle');
        Route::resource('prestasi', PrestasiController::class);
        Route::resource('konfigurasi', KonfigurasiController::class)->only(['edit', 'update']);
    });
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::prefix('admin')->group(function () {
    Route::resource('pesan', PesanController::class)->only(['index', 'show', 'store']);
});
