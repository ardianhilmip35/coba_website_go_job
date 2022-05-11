<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\RegisterAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PekerjaController;
use App\Http\Controllers\PerusahaanController;
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
// Route::get('/admin/login', function () {
//     return view('admin.login');
// });
// Route::get('/admin/register', function () {
//     return view('admin.register');
// });
//Profil Admin
// Route::get('/admin/profil', function () {
//     return view('admin.profil_perusahaan.profil');
// });
// Route::get('/admin/profil/edit', function () {
//     return view('admin.profil_perusahaan.edit');
// });

//Lowongan Admin

// User
// Route::get('/', function () {
//     return view('user.login');
// });
// Route::get('/user/register1', function () {
//     return view('user.register1');
// });
// Route::get('/user/register2', function () {
//     return view('user.register2');
// });
// Route::get('/user/register3', function () {
//     return view('user.register3');
// });

// Route::get('/dashboard', function () {
//     return view('user.dashboard');
// });
// Route::get('/profil', function () {
//     return view('user.profil');
// });

// Route::get('/lowongan', function () {
//     return view('user.lowongan_kerja_pelamar');
// });

// Route::get('/profilperusahaan', function () {
//     return view('user.tampilan_profil_perusahaan');
// });
// Route::get('/profil', function () {
//     return view('user.profil');
// });
// Route::get('/dashboard', function () {
//     return view('user.dashboard');
// });
// Route::get('/profilperusahaan', function () {
//     return view('user.profil_perusahaan_user1');
// });
// Route::get('/detailperusahaan', function () {
//     return view('user.profil_perusahaan_user2');
// });
// Route::get('/historilamaran', function () {
//     return view('user.riwayat_lamaran');
// });
// Route::get('/detaillowonganuser', function () {
//     return view('user.detail_lowongan_user');
// });





//User Login & Register
route::get('/', [LoginController::class, 'login']);
route::get('/register', [RegisterController::class, 'register']);

//Admin Login & Register
route::get('/admin/login', [LoginAdminController::class, 'loginadm']);
route::get('/admin/register', [RegisterAdminController::class, 'registeradm']);

//Dashboard user & admin
route::get('/user/beranda', [DashboardController::class, 'dashboarduser']);
route::get('/admin/beranda', [DashboardController::class, 'dashboardadm']);
route::get('/beranda', [DashboardController::class, 'dashboard']);
