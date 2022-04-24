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

// User
Route::get('/user/login', function () {
    return view('user.login');
});
Route::get('/user/register1', function () {
    return view('user.register1');
});
Route::get('/user/register2', function () {
    return view('user.register2');
});

//
Route::get('/lowongan', function () {
    return view('user.lowongan_kerja_pelamar');
});

Route::get('/profilperusahaan', function () {
    return view('user.tampilan_profil_perusahaan');
});
Route::get('/profil', function () {
    return view('user.profil');
});
Route::get('/dashboard', function () {
    return view('user.dashboard');

});