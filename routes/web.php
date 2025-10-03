<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\QuestionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

// Route::get('/mahasiswa/{param1}', function () {
//     return 'Halo Mahasiswa';
// })->name('mahasiswa.show');

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya '.$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});

Route::get('/mahasiswa/{param1?}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');

Route::get('/about', function () {
    return view('halaman-about');
});

route::get('/home', [HomeController::class,'index']);
route::get('/pegawai', [PegawaiController::class,'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');