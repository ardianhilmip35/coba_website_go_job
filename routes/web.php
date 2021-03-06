<?php

use App\Http\Controllers\LowonganController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\UpdateProfilController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\RegisterController;

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

//Route aDMIN
Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::resource('/lowongan', LowonganController::class)->name('lowongan');
Route::get('/lowongan', [LowonganController::class, 'index'])->name('lowongan.index');
Route::get('/lowongan/create', [LowonganController::class, 'create'])->name('lowongan.create');
Route::post('/lowongan', [LowonganController::class, 'store'])->name('lowongan.store');
Route::get('/lowongan/edit/{id}', [LowonganController::class, 'edit'])->name('lowongan.edit');
Route::post('/lowongan/update/{id}', [LowonganController::class, 'update'])->name('lowongan.update');
Route::get('/lowongan/delete-lowongan/{id}', [LowonganController::class, 'destroy'])->name('lowongan.delete-lowongan');
Route::get('/perusahaan', [UpdateProfilController::class, 'index'])->name('perusahaan');
Route::get('/perusahaan/edit', [UpdateProfilController::class, 'edit'])->name('perusahaan.edit');
Route::put('/perusahaan/edit', [UpdateProfilController::class, 'update'])->name('perusahaan.update');
Route::get('/laporan', [LaporanController::class, 'laporan'])->name('laporan');

Route::get('/', function () {
    return view('index');
});