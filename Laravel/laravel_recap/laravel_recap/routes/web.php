<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthorController;

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::resource('authors',AuthorController::class);

Route::get('books/dashboard', [BookController::calss,'dashboard'])->name('books.dashboard');
