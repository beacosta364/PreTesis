<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConfiguracionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovimientoController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\PerfilUsuarioController;
use App\Http\Controllers\PdfController;

use App\Http\Controllers\UsuarioRolController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BodegaController;



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
    Route::get('/registro-movimiento-productos', [ProductoController::class, 'registroProductos'])->name('producto.registoMovimientos');

    Route::get('/configuracion/create', [ConfiguracionController::class, 'create'])->name('configuracion.create');
    Route::post('/configuracion', [ConfiguracionController::class, 'store'])->name('configuracion.store');
    Route::get('/configuracion/edit', [ConfiguracionController::class, 'edit'])->name('configuracion.edit');
    Route::put('/configuracion', [ConfiguracionController::class, 'update'])->name('configuracion.update');
    // Ruta para mostrar el índice 
    Route::get('/configuracion', [ConfiguracionController::class, 'index'])->name('configuracion.index');

    
    //Ruta para mostrar el registro de movimientos realizados a los productos
    Route::get('/movimientos', [MovimientoController::class, 'index'])->name('movimientos.index');
    Route::post('/procesar-movimiento', [MovimientoController::class, 'procesarMovimiento'])->name('producto.procesarMovimiento');


    Route::get('/movimientos/filtrar', [MovimientoController::class, 'filtrar'])->name('movimientos.filtrar');

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    Route::get('/configuracion/control', [ConfiguracionController::class, 'control'])->name('configuracion.control');////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //Ruta para mostrar usuarios registrados
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    //Ruta para mostrar productos por agotarse
    Route::get('/productos/agotados', [ProductoController::class, 'agotados'])->name('producto.agotados');
    
    //Ruta para notificaciones
    Route::resource('notificaciones', NotificacionController::class);

    //Ruta actualizar foto perfil usuario
    Route::post('/perfil/actualizar-foto', [PerfilUsuarioController::class, 'actualizarFotoPerfil'])->name('perfil.actualizar-foto');

    //Rutas para mostrar y actualizar rol de los usuarios
    Route::get('/usuarios-roles', [UsuarioRolController::class, 'index']);
    Route::post('/usuarios-actualizar-rol', [UsuarioRolController::class, 'actualizarRol'])->name('usuarios.actualizarRol');

    //ruta para mostrar listado de productos
    Route::get('/productos-listado', [ProductoController::class, 'listado'])->name('producto.listado');

    Route::post('/productos/actualizar-cantidades', [ProductoController::class, 'actualizarCantidadesMasiva'])
    ->name('productos.actualizar.cantidades')
    ->middleware('can:productos.update'); 

    Route::get('/productos/actualizar-cantidades', [ProductoController::class, 'vistaActualizarCantidades'])
    ->name('productos.form.actualizar.cantidades')
    ->middleware('can:productos.update');


    //Ruta para registrar usuarios
    Route::get('/usuarios', [UserController::class, 'index'])->name('users.index');
    Route::get('/usuarios/crear', [UserController::class, 'create'])->name('users.create');
    Route::post('/usuarios', [UserController::class, 'store'])->name('users.store');
    //eliminar usuario por id
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    //Ruta pdf reporte pdf productos
    Route::get('/productos/pdf', [PdfController::class, 'pdfProductos'])->name('productos.pdf');
    //Ruta pdf reporte pdf usuarios registrados
    Route::get('/usuarios/pdf', [PdfController::class, 'pdfUsuarios'])->name('usuarios.pdf');
    //Ruta pdf reporte pdf de productos agotados o por agotarse
    Route::get('/productos-agotados/pdf', [PdfController::class, 'productosAgotadosPdf'])->name('productos.agotados.pdf');
    //Ruta pdf reporte pdf de movimiento de productos
    Route::get('/movimientos/pdf', [PdfController::class, 'generarMovimientosPDF'])->name('movimientos.pdf');
    //Ruta pdf reporte pdf de productos agotados o por agotarse en dashboard
    Route::get('/pdf/productos-agotados-categoria', [PdfController::class, 'productosAgotadosPorCategoriaPdf'])->name('pdf.productos.agotados.categoria');


    //# de productos para dashboard
    Route::get('/dashboard', [ProductoController::class, 'dashboard'])->name('dashboard');
    //# de usuarios registrados para dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::post('/registro-intento', [BodegaController::class, 'registrarIntento'])->name('bodega.registrar');
    Route::get('/historial-bodega', [BodegaController::class, 'verHistorial'])->name('bodega.historial');

    Route::get('/historial-bodega/pdf', [PdfController::class, 'exportarHistorialBodega'])->name('bodega.historial.pdf');



});

require __DIR__.'/auth.php';
