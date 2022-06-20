<?php

use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController as CategoryController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopCartController;
use App\Http\Controllers\UserController;
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
Route::redirect('/home', '/');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/storemessage', [HomeController::class, 'storemessage'])->name('storemessage');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::post('/storecomment', [HomeController::class, 'storecomment'])->name('storecomment');

Route::view('/loginadmin','admin.login')->name('loginadmin');
Route::post('/loginadmincheck', [HomeController::class, 'loginadmincheck'])->name('loginadmincheck');


Route::get('/logoutuser', [HomeController::class, 'logout'])->name('logout');


Route::get('/product/{id}', [HomeController::class, 'product'])->name('product');
Route::get('/shop/{id}/{slug}', [HomeController::class, 'categoryproducts'])->name('categoryproducts');

/*-------------------------------------------------------------------------
| User Routes
|-------------------------------------------------------------------------- */
Route::middleware('auth')->group(function (){
    Route::prefix('userpanel')->name('userpanel.')->controller(UserController::class)->group(function () {
        Route::get('/',  'index')->name('index');
        Route::get('/reviews',  'reviews')->name('reviews');
        Route::get('/reviewdelete/{id}', 'reviewdelete')->name('reviewdelete');
        Route::get('/orders',  'orders')->name('orders');
        Route::get('/orderdetail/{id}',  'orderdetail')->name('orderdetail');

        Route::get('/cancelproduct/{id}', 'cancelproduct')->name('cancelproduct');

    });

    // ************* SHOPCART ROUTES
    Route::prefix('/shopcart')->controller(ShopCartController::class)->name('shopcart.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/add/{id}', 'add')->name('add');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/delete/{id}', 'destroy')->name('delete');
        Route::post('/order', 'order')->name('order');
        Route::post('/storeorder', 'storeorder')->name('storeorder');
        Route::get('/ordercomplete', 'ordercomplete')->name('ordercomplete');
    });
});



/*-------------------------------------------------------------------------
| Admin Routes
|-------------------------------------------------------------------------- */


    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
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
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/delete/{id}', 'destroy')->name('delete');
        });

        // ************ ADMIN PRODUCT ROUTES
        Route::prefix('/product')->controller(ProductController::class)->name('product.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/delete/{id}', 'destroy')->name('delete');
        });

        // ************ ADMIN PRODUCT IMAGE ROUTES
        Route::prefix('/image')->controller(ImageController::class)->name('image.')->group(function () {
            Route::get('/{pid}', 'index')->name('index');
            Route::get('/create/{pid}', 'create')->name('create');
            Route::post('/store/{pid}', 'store')->name('store');
            Route::post('/update/{pid}/{id}', 'update')->name('update');
            Route::get('/delete/{pid}/{id}', 'destroy')->name('delete');
        });

        // ************ ADMIN MESSAGE ROUTES
        Route::prefix('/message')->controller(MessageController::class)->name('message.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/delete/{id}', 'destroy')->name('delete');
        });

        // ************ ADMIN FAQ ROUTES
        Route::prefix('/faq')->controller(FaqController::class)->name('faq.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/delete/{id}', 'destroy')->name('delete');
        });

        // ************ ADMIN COMMENT ROUTES
        Route::prefix('/comment')->controller(CommentController::class)->name('comment.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/delete/{id}', 'destroy')->name('delete');
        });

        // ************ ADMIN USER ROUTES
        Route::prefix('/user')->controller(AdminUserController::class)->name('user.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/edir/{id}', 'show')->name('edit');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/delete/{id}', 'destroy')->name('delete');
            Route::post('/addrole/{id}', 'addrole')->name('addrole');
            Route::get('/deleterole/{uid}/{rid}', 'deleterole')->name('deleterole');
        });


        // ************ ADMIN ORDER ROUTES
        Route::prefix('/order')->controller(\App\Http\Controllers\Admin\OrderController::class)->name('order.')->group(function () {
            Route::get('/{slug}', 'index')->name('index');
            Route::get('/edit/{id}', 'show')->name('edit');
            Route::get('/show/{id}', 'show')->name('show');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/delete/{id}', 'destroy')->name('delete');
            Route::get('/cancelorder/{id}', 'cancelorder')->name('cancelorder');
            Route::get('/cancelproduct/{id}', 'cancelproduct')->name('cancelproduct');
            Route::get('/acceptproduct/{id}', 'acceptproduct')->name('acceptproduct');

        });


    });

