<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UtamaController;
Route::get('/', [UtamaController::class, 'index']);


// Route::get('/', function () {
//     return view('welcome');
// });

//ini adalah komentar
Route::get('/horeee-saya-bisa', function (){
    return 'Ini adalah halaman saya';
});