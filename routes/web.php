<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Product;
use App\Http\Controllers\Purchase;
use App\Http\Controllers\Sale;
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




// home page
Route::get('/',[HomeController::class,'index']);
// product page
Route::get('/product',[Product::class,'product'])->name('product');
Route::get('/product/addProduct',[Product::class,'addProduct'])->name('add.product');
Route::get('/product/deletedProduct',[Product::class,'deletedProduct'])->name('deleted.product');
// category pages
Route::get('/product/category',[Product::class,'category'])->name('category');
Route::get('/product/addCategory',[Product::class,'addCategory'])->name('add.category');
Route::get('/product/deletedCategory',[Product::class,'deletedCategory'])->name('deleted.category');
// purchase pages
Route::get('/purchase',[Purchase::class,'purchase'])->name('purchase');
Route::get('/purchase/addPurchase',[Purchase::class,'addPurchase'])->name('add.purchase');
Route::get('/purchase/deletedPurchase',[Purchase::class,'deletedPurchase'])->name('deleted.purchase');
// sales pages
Route::get('/sale',[Sale::class,'sale'])->name('sale');
Route::get('/sale/addSales',[Sale::class,'addSales'])->name('add.sales');
Route::get('/sale/deletedSales',[Sale::class,'deletedSales'])->name('deleted.sales');