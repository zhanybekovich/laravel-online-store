<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/about', [\App\Http\Controllers\HomeController::class, 'about'])->name('home.about');
