<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\CategoryController as ControllersCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.home'); });

Route::get('/adminpanel', function () {
    return view('admin.home'); });

Route::resource('categories', CategoryController::class);
