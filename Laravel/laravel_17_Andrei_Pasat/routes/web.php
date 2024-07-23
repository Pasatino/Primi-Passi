<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnimeController;

Route::get('/', [HomeController::class,'welcome'])->name('welcome');
Route::get('/genre', [AnimeController::class,'genre_index'])->name('genre.index');
Route::get('/animeByGenre/{id}', [AnimeController::class,'animeByGenre'])->name('genre.anime');
Route::get('/anime/{id}', [AnimeController::class,'show'])->name('anime.show');
Route::get('/animeBySearch', [AnimeController::class,'animeBySearch'])->name('anime.search');