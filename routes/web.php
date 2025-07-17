<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $viewData = [];
    $viewData['title'] = 'Home Page - Online Store';
    return view('home.index')->with('viewData', $viewData);
});
