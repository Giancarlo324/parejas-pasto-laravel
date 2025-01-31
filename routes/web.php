<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DatingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', [HomeController::class, 'getIndex']);

Route::group(['middleware' => 'auth'], function () {
    Route::any('dating', [DatingController::class, 'getIndex']);
    Route::get('profile/edit/{id}', [ProfileController::class, 'getEdit']);
    Route::put('profile/edit/{id}', [ProfileController::class, 'putEdit']);
    Route::get('likes', [DatingController::class, 'getLikes']);
    Route::get('likesme', [DatingController::class, 'getLikesme']);
    Route::get('profile/{id}', [DatingController::class, 'getProfile']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'getIndex'])->name('home');
