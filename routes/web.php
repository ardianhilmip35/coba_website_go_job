<?php

use App\Http\Controllers\LoginController;
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


// AdminLoginRegister
Route::get('/admin/login', function () {
    return view('admin.login');
});
Route::get('/admin/register', function () {
    return view('admin.register');
});
//Profil Admin
Route::get('/admin/profil', function () {
    return view('admin.profil_perusahaan.profil');
});
Route::get('/admin/profil/edit', function () {
    return view('admin.profil_perusahaan.edit');
});
//Lowongan Admin
Route::get('/admin/lowongan', function () {
    return view('admin.lowongan.iklan');
});
Route::get('/admin/lowongan/tambah', function () {
    return view('admin.lowongan.tambah');
});
Route::get('/admin/lowongan/edit', function () {
    return view('admin.lowongan.edit');
});
Route::get('/admin/lowongan/laporan', function () {
    return view('admin.lowongan.laporan');
});
// User
Route::get('/', function () {
    return view('user.login');
});
Route::get('/user/register1', function () {
    return view('user.register1');
});
Route::get('/user/register2', function () {
    return view('user.register2');
});
Route::get('/user/register3', function () {
    return view('user.register3');
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
Route::get('/detailperusahaan', function () {
    return view('user.profil_perusahaan_user2');
});
Route::get('/historilamaran', function () {
    return view('user.riwayat_lamaran');
});
Route::get('/detaillowonganuser', function () {
    return view('user.detail_lowongan_user');
});

route::get('/login',[LoginController::class,'login'])->name('login');
route::get('/register1',[LoginController::class,'register1'])->name('register1');