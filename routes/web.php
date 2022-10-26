<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionHeaderController;
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

Route::get('/login', [LoginController::class, 'view_login']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
// Product
Route::get('/product-list', [ProductController::class, 'view_list'])->name('list-product');
Route::get('/product-list/{id}', [ProductController::class, 'detail'])->name('detail');
Route::get('product-checkout', [ProductController::class, 'checkout'])->name('checkout');;

// checkout
Route::post('/checkout', [TransactionHeaderController::class, 'transaction'])->name('Poscheckout');

// buy
Route::post('/buy', [CheckoutController::class, 'prosess'])->name('proses');
