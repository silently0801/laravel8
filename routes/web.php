<?php

use App\Http\Controllers\FacilityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ToolboxController;
use App\Models\Facility;
use App\Models\News;
use App\Models\Product;

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
Route::get('/', [FrontController::class, 'index'])->name('index');

Route::post('/contact', [FrontController::class, 'contact']);

Route::prefix('/news')->group(function () {
    Route::get('/', [FrontController::class, 'newsList'])->name('news.list');
    Route::get('/{id}', [FrontController::class, 'newsContent'])->name('news.content');
});

Route::get('/facility',[FrontController::class,'facility'])->name('facility');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// 後台
Route::prefix('/admin')->middleware(['auth'])->group(function () {
    // 最新消息
    Route::prefix('/news')->group(function () {
        // 後台列表頁
        Route::get('/', [NewsController::class, 'index'])->name('news.index');
        Route::get('/create', [NewsController::class, 'create'])->name('news.create');
        Route::post('/', [NewsController::class, 'store'])->name('news.store');
        Route::get('/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
        Route::patch('/{id}', [NewsController::class, 'update'])->name('news.update');
        Route::delete('/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
    });

    //設施介紹
    Route::prefix('/facility')->group(function () {
        Route::get('/', [FacilityController::class, 'index'])->name('facility.index');
        Route::get('/create', [FacilityController::class, 'create'])->name('facility.create');
        Route::post('/', [FacilityController::class, 'store'])->name('facility.store');
        Route::get('/{id}/edit',[FacilityController::class,'edit'])->name('facility.edit');
        Route::patch('/{id}',[FacilityController::class,'update'])->name('facility.update');
        Route::delete('/{id}',[FacilityController::class,'destroy'])->name('facility.destroy');
    });

    // 產品
    Route::resource('/products',ProductController::class);
    Route::delete('/product-image',[ProductController::class,'imageDelete'])->name('product.image_delete');
    // 上傳圖片
    Route::post('/image-upload',[ToolboxController::class,'imageUpload'])->name('tool.image_upload');
});
