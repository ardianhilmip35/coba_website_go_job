<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

//Login Admin
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
// tambahi route gae post login

//Register Admin
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

//Dashboard Admin
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');


