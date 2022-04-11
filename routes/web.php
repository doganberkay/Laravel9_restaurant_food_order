<?php

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

Route::get('/', function () {
    return view('home.index');
});
Route::get('/welcome', function () {
    return view('welcome');
});

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
Route::get('/admin', [AdminHomeController::class, 'index'])->name('Admin Panel');
// CATEGORY ROUTE
Route::get('/admin/category', [CategoryController::class, 'index'])->name('Admin_category');
Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('Admin_category_create');
Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('Admin_category_store');
