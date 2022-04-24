<?php

use Illuminate\Support\Facades\Route;

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


// Admin
Route::get('/admin/login', function () {
    return view('admin.login');
});
Route::get('/admin/register', function () {
    return view('admin.register');
});
Route::get('/admin/profil', function () {
    return view('admin.profil');
});

Route::get('/', function () {
    return view('login');
});
Route::get('/lowongan', function () {
    return view('user.lowongan_kerja_pelamar');
});
Route::get('/profilperusahaan', function () {
    return view('user.tampilan_profil_perusahaan');
});