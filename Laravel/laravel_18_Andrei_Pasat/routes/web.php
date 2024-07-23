<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

/* Route::middleware('auth')->group(function(){
    Route::get('/users', [HomeController::class, 'usersDashboard'])->name('usersDashboard');
    Route::get('/user/{user}', [UserController::class, 'show'])->name('show');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('edit');
}); */

Route::get('/users', [HomeController::class, 'usersDashboard'])->name('usersDashboard');
Route::get('/user/{user}', [UserController::class, 'show'])->name('show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('edit');
