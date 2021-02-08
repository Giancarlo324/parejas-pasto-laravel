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
    //Route::any('dating', [DatingController::class, 'postLike'])->name('postLike');
    //Route::any('dating', [DatingController::class, 'postDislike'])->name('postDislike');
    Route::get('match', [DatingController::class, 'getMatch']);
    Route::get('match/{id}', [DatingController::class, 'getMatchInfo']);
    Route::get('likeme', [DatingController::class, 'getLikeMe']);
    Route::get('likeme/{id}', [DatingController::class, 'getLikeMeInfo']);
    Route::put('profile/{id}', [ProfileController::class, 'getIndex']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'getIndex'])->name('home');
