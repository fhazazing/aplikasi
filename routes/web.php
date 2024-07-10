<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});



// Route::get('/', function () {
//     return view('template.app');
// });



Route::resource('/pengguna',UserController::class);
Route::resource('/kelas',KelasController::class);
Route::resource('/matakuliah',MatakuliahController::class);
Route::resource('/dosen',DosenController::class);
Route::resource('/mahasiswa',MahasiswaController::class);
Route::resource('/jadwal',JadwalController::class);

// Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
