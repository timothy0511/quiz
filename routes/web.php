<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;

Route::get('/', [UtamaController::class, 'index']);
Route::get('/daftar-kategori', [KategoriController::class, 'tampil']);
Route::get('/tambah-kategori', [KategoriController::class, 'create']);
Route::post('/simpan-kategori', [KategoriController::class, 'simpan']);
Route::get('/daftar-barang', [BarangController::class, 'tampil']);
Route::get('/tambah-barang', [BarangController::class, 'create']);
Route::post('/simpan-barang', [BarangController::class, 'simpan']);
Route::delete('/hapus-kategori/{kategori}', [KategoriController::class, 'hapus'])->name('kategori.hapus');
//ini adalah komentar
Route::get('/horeee-saya-bisa', function (){
    return 'Ini adalah halaman saya';
});