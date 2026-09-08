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
Route::get('/ubah-kategori/{kategori}', [KategoriController::class, 'ubah'])->name('kategori.ubah');
Route::put('/update-kategori/{kategori}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/hapus-barang/{barang}', [BarangController::class, 'hapus'])->name('barang.hapus');
Route::get('/ubah-barang/{barang}', [BarangController::class, 'ubah'])->name('barang.ubah');
Route::put('/update-barang/{barang}', [BarangController::class, 'update'])->name('barang.update');


Route::get('/horeee-saya-bisa', function (){
    return 'Ini adalah halaman saya';
});