<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;

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

Route::get('/',[FrontController::class,'index']);

Route::get('/hello',[FrontController::class,'hello']);

Route::get('/news',[FrontController::class,'news']);

Route::get('/news/{id}',[FrontController::class,'newsContent']);

Route::get('/create-news',[FrontController::class,'createNews']);

Route::post('/store-news',[FrontController::class,'storeNews']);

Route::get('/update-news/{id}',[FrontController::class,'updateNews']);

Route::get('/destroy-news/{id}',[FrontController::class,'destroyNews']);

Route::post('/contact',[FrontController::class,'contact']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
