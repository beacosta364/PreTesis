<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Producto;
use App\Models\Movimiento;
use App\Models\Categoria;
use Carbon\Carbon; //para trabajar con fechas, usado en este caso para mostrar los movimientos
                   //del ultimo mes de productos

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

    // Query base para productos con cantidad agotada o por agotarse
    $query = Producto::with('categoria')
                ->where(function ($q) {
                    $q->where('cantidad', 0)
                      ->orWhereColumn('cantidad', '<=', 'min_stock');
                });

    // Si se seleccionó una categoría específica, filtrar
    if ($categoriaSeleccionada && $categoriaSeleccionada !== 'todas') {
        $query->where('categoria_id', $categoriaSeleccionada);
    }

    $productosFiltrados = $query->get();

    return view('dashboard', compact(
        'totalUsuarios',
        'totalProductos',
        'movimientosMes',
        'productosFiltrados',
        'categorias',
        'categoriaSeleccionada'
    ));
}
}



