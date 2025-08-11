<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Producto;
use App\Models\Movimiento;
use App\Models\Categoria;
use App\Models\Notificacion;

use Carbon\Carbon; 
class DashboardController extends Controller
{
    public function index(Request $request)
{
    $totalUsuarios = User::count();
    $totalProductos = Producto::count();

    $inicioMes = Carbon::now()->startOfMonth();
    $finMes = Carbon::now()->endOfMonth();
    $movimientosMes = Movimiento::whereBetween('created_at', [$inicioMes, $finMes])->count();

    $categorias = Categoria::all();

    $categoriaSeleccionada = $request->get('categoria');


    $query = Producto::with('categoria')
                ->where(function ($q) {
                    $q->where('cantidad', 0)
                    ->orWhereColumn('cantidad', '<=', 'min_stock');
                });


    if ($categoriaSeleccionada && $categoriaSeleccionada !== 'todas') {
        $query->where('categoria_id', $categoriaSeleccionada);
    }

    $productosFiltrados = $query->get();
    $notificaciones = Notificacion::latest()->get();

    return view('dashboard', compact(
        'totalUsuarios',
        'totalProductos',
        'movimientosMes',
        'productosFiltrados',
        'categorias',
        'categoriaSeleccionada',
        'notificaciones'
    ));
}
}



