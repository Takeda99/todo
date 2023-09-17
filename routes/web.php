<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sample\IndexController;
use App\Http\Controllers\Tweet\CreateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/sample', [\App\Http\Controllers\Sample\IndexController::class,'show']);

Route::get('/sample', [IndexController::class,'show']);

Route::get('/sample/{id}',[IndexController::class,'showId']);

Route::get('/tweet',\App\Http\Controllers\Tweet\IndexController::class)
->name('tweet.index');

Route::post('/tweet/create',[CreateController::class])
->name('tweet.create');
