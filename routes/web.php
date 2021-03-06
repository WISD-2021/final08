<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;
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

Route::get('user_information',[UserController::class, "show"])->name("users.user_information");
Route::get('user_information_edit/{id}/edit', [UserController::class, 'user_information_edit'])->name('users.user_information_edit');
Route::patch('user_information/{id}', [UserController::class, 'user_information_update'])->name('users.user_information_update');

Route::resource('cart_items',CartItemController::class);

Route::get('/cart_item/create/{id}',[CartItemController::class,"create"])->name("cart_items.create");

Route::resource('products',ProductController::class);

//後台
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index');
    //商品管理
    Route::get('products', [AdminPostsController::class, 'index'])->name('admin.posts.index');
    Route::get('products/create', [AdminPostsController::class, 'create'])->name('admin.posts.create');
    Route::get('products/{id}/edit', [AdminPostsController::class, 'edit'])->name('admin.posts.edit');
    Route::post('products', [AdminPostsController::class, 'store'])->name('admin.posts.store');
    Route::patch('products/{id}', [AdminPostsController::class, 'update'])->name('admin.posts.update');
    Route::delete('products/{id}', [AdminPostsController::class, 'destroy'])->name('admin.posts.destroy');
    //使用者管理
    Route::get('users', [UserController::class, 'index'])->name('admin.users.index');
    Route::delete('users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');
    //管理者管理
    Route::get('employees', [EmployeeController::class, 'index'])->name('admin.employees.index');
    Route::get('employees/create', [EmployeeController::class, 'create'])->name('admin.employees.create');
    Route::get('employees/{id}/edit', [EmployeeController::class, 'edit'])->name('admin.employees.edit');
    Route::post('employees', [EmployeeController::class, 'store'])->name('admin.employees.store');
    Route::patch('employees/{id}', [EmployeeController::class, 'update'])->name('admin.employees.update');
    Route::delete('employees/{id}', [EmployeeController::class, 'destroy'])->name('admin.employees.destroy');
    //訂單管理
    Route::get('orders', [OrderController::class, 'index'])->name('admin.orders.index');
    Route::delete('orders/{id}', [OrderController::class, 'destroy'])->name('admin.orders.destroy');
});


