<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Producto;
use App\Models\Movimiento;
use Carbon\Carbon; //para trabajar con fechas, usado en este caso para mostrar los movimientos
                   //del ultimo mes de productos

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsuarios = User::count();
        $totalProductos = Producto::count();

                // Obtener movimientos del último mes
                $inicioMes = Carbon::now()->startOfMonth(); // primer día del mes actual
                $finMes = Carbon::now()->endOfMonth();      // último día del mes actual
        
                $movimientosMes = Movimiento::whereBetween('created_at', [$inicioMes, $finMes])->count();
        
                return view('dashboard', compact('totalUsuarios', 'totalProductos', 'movimientosMes'));
    }

}