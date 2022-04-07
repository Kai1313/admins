<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/login-page', function () {
    return view('admin/login');
})->name('login-page');
Route::get('/forgot', function () {
    return view('admin/forgot-password');
})->name('forgot');

Route::get('/', function() {
    return view('main/home');
})->name('home');

Route::get('/list', function() {
    return view('main/list');
})->name('product-list');

Route::get('/detail', function() {
    return view('main/detail');
})->name('product-detail');

Route::prefix('administration')->group(function(){
    Route::get('/dashboard', function () {
        return view('admin/dashboard');
    })->middleware(['auth'])->name('dashboard');
    Route::prefix('article')->group(function(){
        Route::get('/list', function () {
            return view('admin/article-list');
        })->middleware(['auth'])->name('article-list');
        Route::get('/manage/{id?}', function () {
            return view('admin/article-manage');
        })->middleware(['auth'])->name('article-manage');
    });
    Route::prefix('banner')->group(function(){
        Route::get('/list', function () {
            return view('admin/banner-list');
        })->middleware(['auth'])->name('banner-list');
        Route::get('/manage/{id?}', [ProductController::class, 'manageForm'])->middleware(['auth'])->name('banner-manage');
        Route::get('get-banner-list', [ProductController::class, 'getBannerList'])->middleware(['auth'])->name('get-banner-list');
        Route::post('submitBanner', [ProductController::class, 'store'])->middleware(['auth'])->name('submit-banner');
    });
    Route::prefix('product')->group(function(){
        Route::get('/list', function () {
            return view('admin/product-list');
        })->middleware(['auth'])->name('product-list');
        Route::get('/manage/{id?}', [ProductController::class, 'manageForm'])->middleware(['auth'])->name('product-manage');
        Route::get('get-product-list', [ProductController::class, 'getProductList'])->middleware(['auth'])->name('get-product-list');
        Route::post('submitProduct', [ProductController::class, 'store'])->middleware(['auth'])->name('submit-product');
    });
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
