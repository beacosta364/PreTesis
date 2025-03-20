<?php

namespace App\Http\Controllers;

use App\Models\Movimiento;
use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;

class MovimientoController extends Controller
{
    /**
     * Muestra la vista de movimientos con la lista de productos.
     */
    
    public function index()
    {
        $productos = Producto::all(); // Obtener todos los productos
        $movimientos = Movimiento::with(['producto', 'usuario'])->orderBy('id', 'DESC')->paginate(10);
        return view('movimientos.index', compact('movimientos'));
        // return view('movimientos', compact('productos'));
        
    }

    /**
     * Procesa el movimiento de productos (ingreso o extracción).
     */
    public function procesarMovimiento(Request $request)
    {
        // Validación de datos enviados desde el formulario
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'tipo_movimiento' => 'required|in:ingresar,extraer',
            'cantidad' => 'required|integer|min:1',
        ]);

        // Obtener el producto seleccionado
        $producto = Producto::findOrFail($request->producto_id);

        // Verificar si el usuario está autenticado
        $usuario = Auth::user();
        if (!$usuario) {
            return redirect()->back()->with('error', 'Debes iniciar sesión para realizar movimientos.');
        }

        // Manejo de lógica de movimientos
        if ($request->tipo_movimiento === 'extraer') {
            if ($producto->cantidad < $request->cantidad) {
                return redirect()->back()->with('error', 'No hay suficiente stock para extraer.');
            }
            $producto->cantidad -= $request->cantidad; // Restar la cantidad extraída
        } else {
            $producto->cantidad += $request->cantidad; // Sumar la cantidad ingresada
        }

        // Guardar cambios en el producto
        $producto->save();

        // Registrar el movimiento en la base de datos
        Movimiento::create([
            'tipo_movimiento' => $request->tipo_movimiento,
            'cantidad' => $request->cantidad,
            'producto_id' => $producto->id,
            'nombre_producto' => $producto->nombre, // Guardar el nombre del producto
            'usuario_id' => $usuario->id,
            'nombre_usuario' => $usuario->name, // Guardar el nombre del usuario
        ]);

        return redirect()->back()->with('success', 'Movimiento registrado con éxito.');
    }



    public function filtrar(Request $request)
{
    // Iniciamos la consulta sobre el modelo Movimiento
    $query = Movimiento::query();
    
    // FILTRO POR FECHAS:
    if ($request->filled('fecha_inicio') && $request->filled('fecha_fin')) {
        $fechaInicio = $request->input('fecha_inicio');
        $fechaFin    = $request->input('fecha_fin');
        $query->whereBetween('created_at', [$fechaInicio, $fechaFin]);
    } else {
        // Por defecto, movimientos de los últimos 30 días
        $fechaInicio = now()->subDays(30);
        $query->where('created_at', '>=', $fechaInicio);
    }
    
    // FILTRO POR NOMBRE DE PRODUCTO:
    if ($request->filled('producto_id')) {
        $productoNombre = $request->input('producto_id');
        $query->where('nombre_producto', $productoNombre);
    }
    
    // FILTRO POR NOMBRE DE USUARIO:
    if ($request->filled('usuario_id')) {
        $usuarioNombre = $request->input('usuario_id');
        $query->where('nombre_usuario', $usuarioNombre);
    }
    
    // FILTRO POR TIPO DE MOVIMIENTO:
    if ($request->filled('tipo_movimiento')) {
        $tipoMovimiento = $request->input('tipo_movimiento');
        $query->where('tipo_movimiento', $tipoMovimiento);
    }
    
    // Ordenar por fecha descendente y aplicar paginación
    $movimientos = $query->orderBy('created_at', 'desc')->paginate(500);
    $movimientos->appends($request->all());
    
    // Obtener listas únicas para poblar selectores en el formulario
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
