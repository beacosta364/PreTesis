<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConfiguracionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //ruta categorias
    Route::resource('/categoria',CategoriaController::class);
    //ruta productos
    Route::resource('/producto',ProductoController::class);

    //ruta Movimiento para ingreso o extraccion de productos.
    Route::get('/movimiento-productos', [ProductoController::class, 'movimiento'])->name('producto.movimiento');
    Route::post('/movimiento-productos', [ProductoController::class, 'procesarMovimiento'])->name('producto.procesarMovimiento');


    Route::get('/configuracion/create', [ConfiguracionController::class, 'create'])->name('configuracion.create');
    Route::post('/configuracion', [ConfiguracionController::class, 'store'])->name('configuracion.store');
    Route::get('/configuracion/edit', [ConfiguracionController::class, 'edit'])->name('configuracion.edit');
    Route::put('/configuracion', [ConfiguracionController::class, 'update'])->name('configuracion.update');
    // Ruta para mostrar el índice 
    Route::get('/configuracion', [ConfiguracionController::class, 'index'])->name('configuracion.index');


    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('/configuracion/control', [ConfiguracionController::class, 'control'])->name('configuracion.control');////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Ruta para mostrar usuarios registrados
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    //Ruta para mostrar productos por agotarse
    Route::get('/productos/agotados', [ProductoController::class, 'agotados'])->name('producto.agotados');

});

require __DIR__.'/auth.php';
