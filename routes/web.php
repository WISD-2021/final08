<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RecordsController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;

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

//主樣板
Route::prefix('home')->group(function () {
    Route::get('/home',[HomeController::class, "index"])->name("home");
    Route::get('/logout',[HomeController::class, 'logout'])->name('logout');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('employees',EmployeeController::class);

Route::resource('orders', OrderController::class);

Route::resource('customers',CustomerController::class);

Route::resource('records',RecordsController::class);

Route::resource('cart_items',CartItemController::class);

Route::resource('products',ProductController::class);

//後台
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index');
    Route::get('posts', [AdminPostsController::class, 'index'])->name('admin.posts.index');
    Route::get('posts/create', [AdminPostsController::class, 'create'])->name('admin.posts.create');
    Route::get('posts/{id}/edit', [AdminPostsController::class, 'edit'])->name('admin.posts.edit');
    Route::post('posts', [AdminPostsController::class, 'store'])->name('admin.posts.store');
    Route::patch('posts/{post}', [AdminPostsController::class, 'update'])->name('admin.posts.update');
    Route::delete('posts/{post}', [AdminPostsController::class, 'destroy'])->name('admin.posts.destroy');
});

