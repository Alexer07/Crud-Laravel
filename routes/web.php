<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;


Route::resource('producto', ProductoController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario', function () {
    return view('formulario');
});


