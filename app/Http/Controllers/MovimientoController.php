<?php

namespace App\Http\Controllers;

use App\Models\Movimiento;
use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;

class MovimientoController extends Controller
{
    
    public function index()
    {
        $productos = Producto::all(); 
        $movimientos = Movimiento::with(['producto', 'usuario'])->orderBy('id', 'DESC')->paginate(10);
        return view('movimientos.index', compact('movimientos'));
        
    }

    public function procesarMovimiento(Request $request)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'tipo_movimiento' => 'required|in:ingresar,extraer',
            'cantidad' => 'required|integer|min:1',
        ]);

        $producto = Producto::findOrFail($request->producto_id);

        $usuario = Auth::user();
        if (!$usuario) {
            return redirect()->back()->with('error', 'Debes iniciar sesión para realizar movimientos.');
        }

        if ($request->tipo_movimiento === 'extraer') {
            if ($producto->cantidad < $request->cantidad) {
                return redirect()->back()->with('error', 'No hay suficiente stock para extraer.');
            }
            $producto->cantidad -= $request->cantidad; 
        } else {
            $producto->cantidad += $request->cantidad; 
        }

        $producto->save();


        Movimiento::create([
            'tipo_movimiento' => $request->tipo_movimiento,
            'cantidad' => $request->cantidad,
            'producto_id' => $producto->id,
            'nombre_producto' => $producto->nombre, 
            'usuario_id' => $usuario->id,
            'nombre_usuario' => $usuario->name, 
        ]);

        return redirect()->back()->with('success', 'Movimiento registrado con éxito.');
    }



    public function filtrar(Request $request)
{

    $query = Movimiento::query();
    

    if ($request->filled('fecha_inicio') && $request->filled('fecha_fin')) {
        $fechaInicio = $request->input('fecha_inicio');
        $fechaFin    = $request->input('fecha_fin');
        $query->whereBetween('created_at', [$fechaInicio, $fechaFin]);
    } else {

        $fechaInicio = now()->subDays(30);
        $query->where('created_at', '>=', $fechaInicio);
    }
    
    if ($request->filled('producto_id')) {
        $productoNombre = $request->input('producto_id');
        $query->where('nombre_producto', $productoNombre);
    }
    

    if ($request->filled('usuario_id')) {
        $usuarioNombre = $request->input('usuario_id');
        $query->where('nombre_usuario', $usuarioNombre);
    }
    

    if ($request->filled('tipo_movimiento')) {
        $tipoMovimiento = $request->input('tipo_movimiento');
        $query->where('tipo_movimiento', $tipoMovimiento);
    }
    

    $movimientos = $query->orderBy('created_at', 'desc')->paginate(500);
    $movimientos->appends($request->all());

    $productos = Movimiento::select('nombre_producto')
                    ->distinct()
                    ->orderBy('nombre_producto')
                    ->get();
    $usuarios = Movimiento::select('nombre_usuario')
                    ->distinct()
                    ->orderBy('nombre_usuario')
                    ->get();
    
    return view('movimientos.filtro', compact('movimientos', 'productos', 'usuarios'));
}


}
