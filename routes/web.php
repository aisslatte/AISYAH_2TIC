<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
<<<<<<< HEAD
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
=======
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\UserController;
>>>>>>> e8be39a (Partial View dan CRUD User)

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website kampus PCR';
});

Route::get('/nama/{param1}', function ($param1) {
    return 'nama saya adalah: ' . $param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'nim saya adalah: ' . $param1;
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

<<<<<<< HEAD
Route::get('/mahasiswa/{param1}',
[MahasiswaController::class, 'show']);
=======
Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/show/{param1?}', [MatakuliahController::class, 'show']);

Route::get('/home', [HomeController::class, 'index']);
>>>>>>> e8be39a (Partial View dan CRUD User)

Route::get('/about', function () {
    return view('halaman-about');
});

Route::post('question/store', [QuestionController::class, 'store'])
<<<<<<< HEAD
		->name('question.store');

Route ::get('dashboard',[DashboardController::class, 'index'])
        ->name('dashboard');

Route::resource('pelanggan', PelangganController::class);

=======
        ->name('question.store');
        
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('pelanggan', PelangganController::class);
Route::resource('user', UserController::class);
>>>>>>> e8be39a (Partial View dan CRUD User)
