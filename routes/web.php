<?php

use App\Models\News;
use App\Models\Product;
use App\Models\Facility;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ToolboxController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\StoreAreaController;
use App\Http\Controllers\StoreController;

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
// 最新消息
Route::prefix('/news')->group(function () {
    Route::get('/', [FrontController::class, 'newsList'])->name('news.list');
    Route::get('/{id}', [FrontController::class, 'newsContent'])->name('news.content');
});
// 設施介紹
Route::get('/facility',[FrontController::class,'facility'])->name('facility');
// 產品
Route::prefix('/product')->group(function (){
    Route::get('/',[FrontController::class,'productList'])->name('product.list');
    Route::get('/{id}',[FrontController::class,'productContent'])->name('product.content');
});
// 購物車
Route::prefix('/shopping-cart')->group(function ()
{
    Route::post('/add',[ShoppingCartController::class,'add'])->name('shopping-cart.add');
    Route::post('/update',[ShoppingCartController::class,'update'])->name('shopping-cart.update');

    Route::get('/content',[ShoppingCartController::class,'content']);
    Route::get('/clear',[ShoppingCartController::class,'clear']);

    Route::get('/step01',[ShoppingCartController::class,'step01'])->name('shopping-cart.step01');
    Route::get('/step02',[ShoppingCartController::class,'step02'])->name('shopping-cart.step02');

});

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
    // 產品類別管理
    Route::resource('/product-categories',ProductCategoryController::class);
    // 產品管理
    Route::resource('/products',ProductController::class);
    Route::delete('/product-image',[ProductController::class,'imageDelete'])->name('product.image-delete');

    // 銷售據點
    // 區域管理
    Route::resource('/store-areas',StoreAreaController::class);
    // 門市管理
    Route::resource('/stores',StoreController::class);
    
    // 上傳圖片
    Route::post('/image-upload',[ToolboxController::class,'imageUpload'])->name('tool.image-upload');
});
