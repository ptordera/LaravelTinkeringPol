<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PeliculaController;

Route::resource('peliculas', PeliculaController::class);

use App\Http\Controllers\MotoController;

Route::resource('motos', MotoController::class);
