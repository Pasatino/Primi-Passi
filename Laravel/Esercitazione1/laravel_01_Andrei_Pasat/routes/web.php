<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pagina-1', function () {
    return view('pagina-1');
});

Route::get('/pagina-2', function () {
    return view('pagina-2');
});
