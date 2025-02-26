<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
});

// Ruta para la página principal
Route::get('/home', function () {
    return view('layouts.plantilla');
});

// Rutas para productos
Route::get('/productos', [ProductController::class, 'index'])->name('productos');
Route::get('/productos/agregar', [ProductController::class, 'agregar'])->name('productos.agregar');

// Ruta de tipo resource para la gestión de categorías
Route::resource('categoria', CategoriaController::class);

