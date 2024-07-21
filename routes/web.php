<?php

use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopDetailController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',                         [ShopController::class, 'index'])->name('home');
Route::get('/shop',                     [ShopController::class, 'shop'])->name('shop');
Route::get('/shop/{category}',          [ShopController::class, 'showByCategory'])->name('showByCategory');
Route::get('/shopDetail/{id}',          [ShopController::class, 'shopDetail'])->name('shopDetail');
Route::get('/shopppingCart',            [ShopController::class, 'shoppingCart'])->name('shoppingCart');
Route::get('/blog',                     [ShopController::class, 'blog'])->name('blog');
Route::get('/checkout',                 [ShopController::class, 'checkout'])->name('checkout');

