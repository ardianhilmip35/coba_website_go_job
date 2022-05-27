<?php

use App\Http\Controllers\API\LoginMobileController;
use App\Http\Controllers\API\RegisterMobileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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


Route::get('/pelamar',[UserMobileController::class ,'index']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//API route for register new user
Route::post('/register', [RegisterMobileController::class, 'register']);

//API route for login user
Route::post('/login', [LoginMobileController::class, 'login']);
