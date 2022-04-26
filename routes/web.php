<?php

use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController as CategoryController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\HomeController;
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
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('Home');

Route::redirect('/anasayfa', '/home');

Route::get('/home', [HomeController::class, 'index'])->name('Home');
Route::get('/about', [HomeController::class, 'about'])->name('About');
Route::get('/contact', [HomeController::class, 'contact'])->name('Contact');
Route::get('/shop', [HomeController::class, 'shop'])->name('Shop');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


/*-------------------------------------------------------------------------
| Admin Routes
|-------------------------------------------------------------------------- */
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');

    // ************* ADMIN CATEGORY ROUTE
    Route::prefix('category')->controller(CategoryController::class)->name('category.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/index2', 'index2')->name('index2');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/delete/{id}', 'destroy')->name('delete');
    });

    // ************ ADMIN PRODUCT ROUTEaaaaa
    Route::prefix('product')->controller(ProductController::class)->name('product.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/delete/{id}', 'destroy')->name('delete');
    });

    // ************ ADMIN PRODUCT IMAGE ROUTE
    Route::prefix('image')->controller(ImageController::class)->name('image.')->group(function () {
        Route::get('/{pid}', 'index')->name('index');
        Route::get('/create/{pid}', 'create')->name('create');
        Route::post('/store/{pid}', 'store')->name('store');
        Route::post('/update/{pid}/{id}','update')->name('update');
        Route::get('/delete/{pid}/{id}', 'destroy')->name('delete');
    });
});
