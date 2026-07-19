<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class)
    ->except(['show']);
Route::get(
    'products/{product}/stock',
    [ProductController::class,'stock']
)
->name('products.stock');    
Route::get(
    'products/{product}/stock/create',
    [ProductController::class,'createStock']
)
->name('products.stock.create');
Route::post(
    'products/{product}/stock',
    [ProductController::class,'storeStock']
)
->name('products.stock.store');
Route::get(
    'products/{product}/stock/sale',
    [ProductController::class,'createSale']
)
->name('products.sale.create');
Route::post(
    'products/{product}/stock/sale',
    [ProductController::class,'storeSale']
)
->name('products.sale.store');



Route::get('/pos', [SaleController::class,'index'])
    ->name('pos.index');
Route::get('/pos/product', [SaleController::class, 'findProduct'])
    ->name('pos.product');    
Route::post(
    '/pos/checkout',
    [SaleController::class, 'checkout']
)->name('pos.checkout');



Route::get('/invoice/{sale}', [SaleController::class, 'invoice'])
    ->name('invoice');



Route::get('/settings', [SettingController::class, 'index'])
    ->name('settings.index');
Route::post('/settings', [SettingController::class, 'update'])
    ->name('settings.update');



Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

    

Route::resource('categories', CategoryController::class);    