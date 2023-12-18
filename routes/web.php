<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ---- fronted ----
Route::get('/', [HomeController::class, 'index']);
Route::get('/trang-chu',[HomeController::class, 'index']);

// ---- show category ----
Route::get('/danh-muc-san-pham/{category_id}',[CategoryProductController::class, 'show_category_home']);
Route::get('/chi-tiet-san-pham/{product_id}',[ProductController::class, 'details_product']);


// ---- backend ----
Route::get('/admin',[AdminController::class, 'index']);
Route::get('/dashboard',[AdminController::class, 'show_dashboard']);
Route::get('/logout',[AdminController::class, 'logout']);
Route::match(['get', 'post'], '/admin_dashboard', [AdminController::class, 'dashboard'])->name('admin');

// ---- category-product ----
Route::get('/add-category-product',[CategoryProductController::class, 'add_category_product']);
Route::get('/all-category-product',[CategoryProductController::class, 'all_category_product']);
Route::get('/edit-category-product/{category_product_id}',[CategoryProductController::class, 'edit_category_product']);
Route::get('/delete-category-product/{category_product_id}',[CategoryProductController::class, 'delete_category_product']);
Route::post('/save-category-product',[CategoryProductController::class, 'save_category_product']);
Route::post('/update-category-product/{category_product_id}',[CategoryProductController::class, 'update_category_product']);
Route::get('/unactive-category-product/{category_product_id}',[CategoryProductController::class, 'unactive_category_product']);
Route::get('/active-category-product/{category_product_id}',[CategoryProductController::class, 'active_category_product']);
// Route::match(['get', 'post'], '/save-category-product', [CategoryProductController::class, 'dashboard'])->name('admin');

// ---- product ----
Route::get('/add-product',[ProductController::class, 'add_product']);
Route::get('/all-product',[ProductController::class, 'all_product']);
Route::get('/edit-product/{product_id}',[ProductController::class, 'edit_product']);
Route::get('/delete-product/{product_id}',[ProductController::class, 'delete_product']);
Route::post('/save-product',[ProductController::class, 'save_product']);
Route::post('/update-product/{product_id}',[ProductController::class, 'update_product']);
Route::get('/unactive-product/{product_id}',[ProductController::class, 'unactive_product']);
Route::get('/active-product/{product_id}',[ProductController::class, 'active_product']);