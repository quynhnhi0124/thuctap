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
Route::group(['prefix'=>'/home'], function (){
    Route::get('/',[\App\Http\Controllers\HomeController::class, 'index']);
    Route::get('/signup',[\App\Http\Controllers\SignupController::class, 'index']);
    Route::post('/signup',[\App\Http\Controllers\SignupController::class, 'store']);

    Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index']);
    Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);
});

Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout']);


