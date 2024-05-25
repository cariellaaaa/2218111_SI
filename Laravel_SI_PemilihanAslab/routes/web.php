<?php

use App\Http\Controllers\CetakController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/kriteria', function () {
    return view('admin.kriteria.index');
});

Route::resource('/mahasiswa', MahasiswaController::class);
//Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
//Route::get('/downloadPdf', [MahasiswaController::class, 'downloadPdf'])->name('mahasiswa.downloadPdf');

Route::get('/penilaian', function () {
    return view('admin.penilaian.penilaian');
});

Route::get('proses', function () {
    return view('admin.proses.proses');
});

Route::get('/user', function () {
    return view('admin.user.user');
});




