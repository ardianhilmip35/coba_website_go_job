<?php

use App\Http\Controllers\LowonganController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UpdateProfilController;

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


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('/lowongan', LowonganController::class);
Route::get('/perusahaan', [UpdateProfilController::class, 'index'])->name('perusahaan');
Route::get('/perusahaan/edit', [UpdateProfilController::class, 'edit'])->name('perusahaan.edit');
Route::put('/perusahaan/edit', [UpdateProfilController::class, 'update'])->name('perusahaan.update');


