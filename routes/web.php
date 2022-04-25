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

// User
Route::get('/', function () {
    return view('user.login');
});
<<<<<<< HEAD
Route::get('/user/register1', function () {
    return view('user.register1');
});
Route::get('/user/register2', function () {
    return view('user.register2');
=======

Route::get('/register', function () {
    return view('user.register');
>>>>>>> d848b6e01fadb3f1d1b4393460dd0385766eb037
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
});

Route::get('/profil', function () {
    return view('user.profil');
});

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
Route::get('/profilperusahaan', function () {
    return view('user.profil_perusahaan_user1');
});
Route::get('/profilperusahaan2', function () {
    return view('user.profil_perusahaan_user2');
});
Route::get('/historilamaran', function () {
    return view('user.riwayat_lamaran');
});
Route::get('/detaillowonganuser', function () {
    return view('user.detail_lowongan_user');
});

