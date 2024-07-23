<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactsController;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');
Route::get('/contatti', [PageController::class, 'contatti'])->name('contatti');
Route::post('/salva/contatto', [ContactsController::class, 'salvaContatto'])->name('salvaContatto');
Route::get('/thankyou',[PageController::class, 'thankYou'])->name('thankYou');
