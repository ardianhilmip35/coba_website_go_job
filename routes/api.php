<?php

use App\Models\UserMobile;
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

<<<<<<< HEAD
Route::get('/pelamar',[UserMobileController::class ,'index']);
=======

>>>>>>> 980b6790e4d9c98ced6743f401df6c1318493a60
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('items', function(){
    return UserMobile::all();
});