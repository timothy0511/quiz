<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\KategoriController;

Route::get('/', [UtamaController::class, 'index']);

Route::get('/daftar-kategori', [KategoriController::class, 'tampil']);
// Route::get('/', function () {
//     return view('welcome');
// });

//ini adalah komentar
Route::get('/horeee-saya-bisa', function (){
    return 'Ini adalah halaman saya';
});