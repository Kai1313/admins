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
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
