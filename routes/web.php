<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\ProductCategoryCotroller;
use \App\Http\Controllers\PageController;
use \App\Http\Controllers\SectionController;
use \App\Http\Controllers\DeleteController;
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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){


    Route::get('/', function()
    {
        return view('index');
    });
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/catalog/{id?}', [PageController::class, 'catalog'])->name('catalog')->where('id', '[0-9]+');
    Route::get('/product/{id?}', [PageController::class, 'product'])->name('product')->where('id', '[0-9]+');
    Route::get('/technology', [PageController::class, 'technology'])->name('technology');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');

    });


Auth::routes(
    ['register' => false,]
);

Route::get('/admin', [HomeController::class, 'index'])->name('home');
Route::resource('/admin/product', ProductController::class);

Route::resource('/admin/category', ProductCategoryCotroller::class);
Route::resource('/admin/section', SectionController::class);

Route::delete('/admin/productimg/{id}', [DeleteController::class, 'deleteimage']);