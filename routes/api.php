<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PerusahaanController;
use App\Http\Controllers\API\LowonganController;
use App\Http\Controllers\API\AuthMobileController;
use App\Http\Controllers\API\ProfileMobileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


    //API route untuk regirter pelamar baru
    Route::post('/register', [AuthMobileController::class, 'register']);

    //API route untuk login pelamar
    Route::post('/login', [AuthMobileController::class, 'login']);

    Route::group(['middleware'=>['auth:sanctum']], function (){

    //API route untuk update data pelamar
    Route::post('/profil/edit', [ProfileMobileController::class, 'edit_profil']);

    //API route untuk tampil data pelamar
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });

    //API route untuk menampilkan data perusahaan
    Route::get('/perusahaan', [PerusahaanController::class, 'lihatperusahaan']);

    //API route untuk menampilkan iklan lowongan
    Route::get('/lowongan', [LowonganController::class, 'lihatlowongan']);

    //API route untuk melamar pekerjaan
    Route::post('/lowongan/lamar', [LowonganController::class, 'lamar']);

    // API route for logout user
    Route::post('/logout', [AuthMobileController::class, 'logout']);
    
    });

    //Yang dicobak dulu lihat lowongan dan perusahaan, middlewarenya matikan dulu