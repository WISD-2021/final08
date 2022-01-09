<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecordsController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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

    Route::get('/',[HomeController::class, "index"])->name("home.index");

//主樣板
Route::prefix('home')->group(function () {
    Route::get('/',[LoginController::class, "index"])->name("login.index");
    Route::get('logout',[LoginController::class, 'logout'])->name('login.logout');

});

Route::get('search',[ProductController::class, "search"])->name("products.search");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('orders', OrderController::class);

Route::resource('users', UserController::class);

Route::resource('records',RecordsController::class);

Route::resource('cart_items',CartItemController::class);

Route::resource('products',ProductController::class);

//後台
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index');
    Route::get('products', [AdminPostsController::class, 'index'])->name('admin.posts.index');
    Route::get('products/create', [AdminPostsController::class, 'create'])->name('admin.posts.create');
    Route::get('products/{id}/edit', [AdminPostsController::class, 'edit'])->name('admin.posts.edit');
    Route::post('products', [AdminPostsController::class, 'store'])->name('admin.posts.store');
    Route::patch('products/{id}', [AdminPostsController::class, 'update'])->name('admin.posts.update');
    Route::delete('products/{id}', [AdminPostsController::class, 'destroy'])->name('admin.posts.destroy');
});

