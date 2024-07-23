<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class,('home')])->name('home');
Route::get('/articoli', [MainController::class,('articoli')])->name('articoli');
Route::get('/articolo/id={id}', [MainController::class,('articolo')])->name('articolo');
