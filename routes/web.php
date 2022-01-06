<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
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
Route::get('/', function () {
    return view('home.index');
});

Route::get('/home',[HomeController::class, "index"])->name("home");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('employees',EmployeeController::class);

Route::resource('orders', OrderController::class);

Route::resource('customers',CustomerController::class);

Route::resource('records',RecordsController::class);

Route::resource('cart_items',CartItemController::class);

Route::resource('products',ProductController::class);

Route::get('/logout',[HomeController::class, 'logout'])->name('logout');
