<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ArtikelPostController;

use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KegiatanPostController;

use App\Http\Controllers\GrafikController;
use App\Http\Controllers\GrafikPostController;

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
    return view('home');
});

Route::get('/profil', function () {
    return view('profil');
});


Route::get('/infografis', [GrafikController::class, 'index']);
Route::get('/infografis/{tahun}', [GrafikPostController::class, 'show'])->name('infografis-post');


Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/artikel-post/{id}', [ArtikelPostController::class, 'show'])->name('artikel-post');

Route::get('/kegiatan', [KegiatanController::class, 'index']);
Route::get('/kegiatan-post/{id}', [KegiatanPostController::class, 'show'])->name('kegiatan-post');

Route::get('/kontak', function () {
    return view('kontak');
});
