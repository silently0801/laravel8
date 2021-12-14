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

// Route::get('/news',[FrontController::class,'newsList']);
// Route::get('/news/{id}',[FrontController::class,'newsContent']);

Route::prefix('/news')->group(function (){
    Route::get('/',[FrontController::class,'newsList']);
    Route::get('/{id}',[FrontController::class,'newsContent']);
});

Route::post('/contact',[FrontController::class,'contact']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
