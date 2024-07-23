<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BrandController;

Route::get('/', [HomeController::class, ('home')])->name('home');
Route::resource('cars', CarController::class);
Route::resource('brands', BrandController::class);