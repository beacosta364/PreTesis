<?php

namespace App\Http\Controllers;

use App\Models\Movimiento;
use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;

class MovimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Movimiento $movimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Movimiento $movimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movimiento $movimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movimiento $movimiento)
    {
        //
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
}
