<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/about', [\App\Http\Controllers\HomeController::class, 'about'])->name('home.about');
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");
Route::get('/admin', [\App\Http\Controllers\Admin\AdminHomeController::class, 'index'])->name('admin.home.index');
Route::get('admin/products', [\App\Http\Controllers\Admin\AdminProductController::class, 'index'])->name('admin.product.index');
