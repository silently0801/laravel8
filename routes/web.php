<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\NewsController;

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

// 前台
Route::get('/', [FrontController::class, 'index']);

Route::prefix('/news')->group(function () {
    Route::get('/', [FrontController::class, 'newsList']);
    Route::get('/{id}', [FrontController::class, 'newsContent']);
});

Route::post('/contact', [FrontController::class, 'contact']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


// 後台
Route::prefix('/admin')->group(function () {
    // 最新消息
    Route::prefix('/news')->group(function () {
        // 後台列表頁
        Route::get('/',[NewsController::class,'index']);
        
    });

});
