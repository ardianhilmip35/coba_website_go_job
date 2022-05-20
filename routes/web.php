<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
Route::get('/profil', function(){
    return view('admin.profil_perusahaan.index');
});

Route::get('/lowongan', function(){
    return view('admin.lowongan.tambah');
});

Route::get('/edit', function(){
    return view('admin.profil_perusahaan.edit');
});
