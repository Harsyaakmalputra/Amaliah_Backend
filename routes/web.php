<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BeritaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout');
});

Route::get('/jurusan',[JurusanController::class, 'index'])->name('Jurusan.index');
Route::get('/jurusan/create',[JurusanController::class, 'create'])->name('Jurusan.create');
Route::post('/jurusan',[JurusanController::class, 'store'])->name('Jurusan.store');
Route::get('/jurusan/{id}/edit',[JurusanController::class, 'edit'])->name('Jurusan.edit');
Route::put('/jurusan/{id}',[JurusanController::class, 'update'])->name('Jurusan.update');
Route::delete('/jurusan/{id}',[JurusanController::class, 'destroy'])->name('Jurusan.destroy');

Route::get('/struktur',[StrukturController::class, 'index'])->name('Struktur.index');
Route::get('/struktur/create',[StrukturController::class, 'create'])->name('Struktur.create');
Route::post('/struktur',[StrukturController::class, 'store'])->name('Struktur.store');
Route::get('/struktur/{id}/edit',[StrukturController::class, 'edit'])->name('Struktur.edit');
Route::put('/struktur/{id}',[StrukturController::class, 'update'])->name('Struktur.update');
Route::delete('/struktur/{id}',[StrukturController::class, 'destroy'])->name('Struktur.destroy');

Route::get('/pengaduan',[PengaduanController::class, 'index'])->name('Pengaduan.index');
Route::get('/pengaduan/create',[PengaduanController::class, 'create'])->name('Pengaduan.create');
Route::post('/pengaduan',[PengaduanController::class, 'store'])->name('Pengaduan.store');
Route::get('/pengaduan/{id}/edit',[PengaduanController::class, 'edit'])->name('Pengaduan.edit');
Route::put('/pengaduan/{id}',[PengaduanController::class, 'update'])->name('Pengaduan.update');
Route::delete('/pengaduan/{id}',[PengaduanController::class, 'destroy'])->name('Pengaduan.destroy');

Route::get('/gallery',[GalleryController::class, 'index'])->name('Gallery.index');
Route::get('/gallery/create',[GalleryController::class, 'create'])->name('Gallery.create');
Route::post('/gallery',[GalleryController::class, 'store'])->name('Gallery.store');
Route::get('/gallery/{id}/edit',[GalleryController::class, 'edit'])->name('Gallery.edit');
Route::put('/gallery/{id}',[GalleryController::class, 'update'])->name('Gallery.update');
Route::delete('/gallery/{id}',[GalleryController::class, 'destroy'])->name('Gallery.destroy');

Route::get('/berita',[BeritaController::class, 'index'])->name('Berita.index');
Route::get('/berita/create',[BeritaController::class, 'create'])->name('Berita.create');
Route::post('/berita',[BeritaController::class, 'store'])->name('Berita.store');
Route::get('/berita/{id}/edit',[BeritaController::class, 'edit'])->name('Berita.edit');
Route::put('/berita/{id}',[BeritaController::class, 'update'])->name('Berita.update');
Route::delete('/berita/{id}',[BeritaController::class, 'destroy'])->name('Berita.destroy');
