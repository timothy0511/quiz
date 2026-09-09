<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\AuthController;

Route::get('/', function(){
    return view('dashboard');
})->name('dashboard');

// Auth routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Kategori routes
Route::get('/daftar-kategori', [KategoriController::class, 'tampil'])->name('kategori.tampil');
Route::get('/tambah-kategori', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/simpan-kategori', [KategoriController::class, 'simpan'])->name('kategori.simpan');
Route::delete('/hapus-kategori/{kategori}', [KategoriController::class, 'hapus'])->name('kategori.hapus');
Route::get('/ubah-kategori/{kategori}', [KategoriController::class, 'ubah'])->name('kategori.ubah');
Route::put('/update-kategori/{kategori}', [KategoriController::class, 'update'])->name('kategori.update');

// Barang routes
Route::get('/daftar-barang', [BarangController::class, 'tampil'])->name('barang.tampil');
Route::get('/tambah-barang', [BarangController::class, 'create'])->name('barang.create');
Route::post('/simpan-barang', [BarangController::class, 'simpan'])->name('barang.simpan');
Route::delete('/hapus-barang/{barang}', [BarangController::class, 'hapus'])->name('barang.hapus');
Route::get('/ubah-barang/{barang}', [BarangController::class, 'ubah'])->name('barang.ubah');
Route::put('/update-barang/{barang}', [BarangController::class, 'update'])->name('barang.update');

Route::get('/horeee-saya-bisa', function (){
    return 'Ini adalah halaman saya';
});