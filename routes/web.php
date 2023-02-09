<?php

use App\Http\Controllers\GuruController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\IzinController;
use App\Http\Controllers\SiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/riwayat', function () {
//     return view('history');
// });


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('/siswa', SiswaController::class);
Route::resource('/guru', GuruController::class);;
Route::get('/izinmasuk', [IzinController::class, 'masuk'])->name('izin.masuk');
Route::get('/izinkeluar', [IzinController::class, 'keluar'])->name('izin.keluar');
Route::post('/izin', [IzinController::class, 'store'])->name('izin.store');
Route::get('/riwayat', [IzinController::class, 'history'])->name('history');
// Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
