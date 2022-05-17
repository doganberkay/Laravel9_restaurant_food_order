<?php

use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\MessageController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::redirect('/anasayfa', '/home');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');

Route::get('/product/{id}', [HomeController::class, 'product'])->name('product');
Route::get('/shop/{id}/{slug}', [HomeController::class, 'categoryproducts'])->name('categoryproducts');



/*-------------------------------------------------------------------------
| Admin Routes
|-------------------------------------------------------------------------- */
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('index');

    // ************* ADMIN GENERAL ROUTES
    Route::get('/settings', [AdminHomeController::class, 'setting'])->name('setting');
    Route::post('/settings', [AdminHomeController::class, 'settingUpdate'])->name('setting.update');

    // ************* ADMIN CATEGORY ROUTES
    Route::prefix('/category')->controller(CategoryController::class)->name('category.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/delete/{id}', 'destroy')->name('delete');
    });

    // ************ ADMIN PRODUCT ROUTES
    Route::prefix('/product')->controller(ProductController::class)->name('product.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/delete/{id}', 'destroy')->name('delete');
    });

    // ************ ADMIN PRODUCT IMAGE ROUTES
    Route::prefix('/image')->controller(ImageController::class)->name('image.')->group(function () {
        Route::get('/{pid}', 'index')->name('index');
        Route::get('/create/{pid}', 'create')->name('create');
        Route::post('/store/{pid}', 'store')->name('store');
        Route::post('/update/{pid}/{id}','update')->name('update');
        Route::get('/delete/{pid}/{id}', 'destroy')->name('delete');
    });

    // ************ ADMIN MESSAGE ROUTES
    Route::prefix('/message')->controller(MessageController::class)->name('message.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}', 'destroy')->name('delete');
    });

    // ************ ADMIN FAQ ROUTES
    Route::prefix('/faq')->controller(FaqController::class)->name('faq.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/delete/{id}', 'destroy')->name('delete');
    });
});
