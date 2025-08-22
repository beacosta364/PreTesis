<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(Request $request)
        {
            $busqueda = $request->input('busqueda');
            $categoriaId = $request->input('categoria');

            $productos = Producto::when($busqueda, function ($query, $busqueda) {
                    $query->where('nombre', 'like', '%' . $busqueda . '%')
                        ->orWhere('id', $busqueda);
                })
                ->when($categoriaId, function ($query, $categoriaId) {
                    $query->where('categoria_id', $categoriaId);
                })
                ->orderBy('id', 'ASC')
                ->paginate(500);

            $categorias = Categoria::orderBy('nombre')->get();

            return view('producto.index', compact('productos', 'busqueda', 'categorias', 'categoriaId'));
        }


    public function create()
    {
        $categorias = Categoria::orderBy('id', 'DESC')->select('id', 'nombre')->get();
        return view('producto.create', compact('categorias'));
    }


    // public function store(Request $request) {
    //     $request->validate([
    //         'nombre' => 'required|unique:productos,nombre',
    //         'descripcion' => 'nullable',
    //         'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'cantidad' => 'required|integer|min:0',
    //         'min_stock' => 'nullable|integer|min:0',
    //         'categoria_id' => 'nullable|exists:categorias,id'
    //     ]);
    //     $nombreImagen = null;
    //     if ($request->hasFile('imagen')) {
    //         $imagen = $request->file('imagen');
    //         $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
    //         $imagen->move(public_path('img'), $nombreImagen);
    //     }
    //     Producto::create([
    //         'nombre' => $request->nombre,
    //         'descripcion' => $request->descripcion,
    //         'imagen' => $nombreImagen,
    //         'cantidad' => $request->cantidad,
    //         'min_stock' => $request->min_stock,
    //         'categoria_id' => $request->categoria_id,
    //         'usuario_id' => auth()->id() 
    //     ]);
    //     return redirect()->route('producto.index')->with('success', 'Producto creado con éxito.');
    // }


    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|unique:productos,nombre',
        'descripcion' => 'nullable',
        'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'cantidad' => 'required|integer|min:0',
        'min_stock' => 'nullable|integer|min:0',
        'categoria_id' => 'nullable|exists:categorias,id'
    ]);

    $nombreImagen = null;
    if ($request->hasFile('imagen')) {
        $imagen = $request->file('imagen');
        $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
        $imagen->move(public_path('img'), $nombreImagen);
    }

    // Crear el producto
    $producto = Producto::create([
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion,
        'imagen' => $nombreImagen,
        'cantidad' => $request->cantidad,
        'min_stock' => $request->min_stock,
        'categoria_id' => $request->categoria_id,
        'usuario_id' => auth()->id() 
    ]);

    // Registrar el movimiento inicial como "ingreso"
    \App\Models\Movimiento::create([
        'tipo_movimiento' => 'ingresar',
        'cantidad' => $request->cantidad,
        'producto_id' => $producto->id,
        'nombre_producto' => $producto->nombre,
        'usuario_id' => auth()->id(),
        'nombre_usuario' => auth()->user()->name,
    ]);

    return redirect()->route('producto.index')->with('success', 'Producto creado con éxito y movimiento inicial registrado.');
}


    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        return view('producto.show', compact('producto'));
    }


    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        $categorias = Categoria::orderBy('id', 'DESC')->select('id', 'nombre')->get();
        return view('producto.edit', compact('producto', 'categorias'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|unique:productos,nombre,' . $id,
            'descripcion' => 'nullable',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cantidad' => 'required|integer|min:0',
            'min_stock' => 'nullable|integer|min:0',
            'categoria_id' => 'nullable|exists:categorias,id'
        ]);

        $producto = Producto::findOrFail($id);

        if ($request->hasFile('imagen')) {

            if ($producto->imagen && file_exists(public_path('img/' . $producto->imagen))) {
                unlink(public_path('img/' . $producto->imagen));
            }
            $imagen = $request->file('imagen');
            $producto->imagen = time() . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('img'), $producto->imagen);
        }


        $producto->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'cantidad' => $request->cantidad,
            'min_stock' => $request->min_stock,
            'categoria_id' => $request->categoria_id
        ]);

        return redirect()->route('producto.index')->with('success', 'Producto actualizado con éxito.');
    }

    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);

        if ($producto->imagen && file_exists(public_path('img/' . $producto->imagen))) {
            unlink(public_path('img/' . $producto->imagen));
        }

        $producto->delete();

        return redirect()->route('producto.index')->with('success', 'Producto eliminado con éxito.');
    }
    public function agotados()
    {
        $productosAgotados = Producto::where('cantidad', 0)
                            ->orWhere(function($query) {
                                $query->whereColumn('cantidad', '<=', 'min_stock')
                                    ->whereNotNull('min_stock'); 
                            })
                            ->orderBy('cantidad', 'asc')
                            ->get();


        return view('producto.agotados', compact('productosAgotados'));
    }

    public function movimiento()
    {
        $productos = Producto::orderBy('nombre')->get();
        return view('producto.movimiento', compact('productos'));
    }

    public function procesarMovimiento(Request $request)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'tipo_movimiento' => 'required|in:ingresar,extraer',
            'cantidad' => 'required|integer|min:1'
        ]);

        $producto = Producto::findOrFail($request->producto_id);

        if ($request->tipo_movimiento == 'ingresar') {
            $producto->cantidad += $request->cantidad;
        } elseif ($request->tipo_movimiento == 'extraer') {
            if ($producto->cantidad < $request->cantidad) {
                return redirect()->back()->with('error', 'No hay suficiente stock para extraer.');
            }
            $producto->cantidad -= $request->cantidad;
        }

        $producto->save();

        return redirect()->route('producto.movimiento')->with('success', 'Movimiento registrado con éxito.');
    }

    public function registroProductos()
    {
        $productos = Producto::orderBy('nombre')->get();
        return view('producto.registroMovimientos', compact('productos'));
    }

    public function listado()
    {
        $productos = Producto::orderBy('nombre')->get();
        return view('producto.listado', compact('productos'));
    }

    public function dashboard()
    {
        $totalProductos = Producto::count(); 

        return view('dashboard', compact('totalProductos'));
    }

    public function actualizarCantidadesMasiva(Request $request)
    {
        $datos = $request->input('cantidades'); 

        foreach ($datos as $productoId => $nuevaCantidad) {
            $producto = Producto::find($productoId);
            if ($producto && is_numeric($nuevaCantidad) && $nuevaCantidad >= 0) {
                $producto->cantidad = (int)$nuevaCantidad;
                $producto->save();
            }
        }

        return redirect()->route('producto.index')->with('success', 'Cantidades actualizadas correctamente.');
    }

    public function vistaActualizarCantidades(Request $request)
    {
        $categoriasSeleccionadas = $request->input('categorias', []);

        $productos = Producto::with('categoria')
            ->when(!empty($categoriasSeleccionadas), function ($query) use ($categoriasSeleccionadas) {
                $query->whereIn('categoria_id', $categoriasSeleccionadas);
            })
            ->orderBy('nombre')
            ->get();

        $categorias = Categoria::orderBy('nombre')->get();

        return view('producto.actualizarCantidades', compact('productos', 'categorias', 'categoriasSeleccionadas'));
    }


    public function movimientoMasivo(Request $request)
    {
        $categoriaId = $request->input('categoria');

        $productos = Producto::when($categoriaId, function ($query, $categoriaId) {
                $query->where('categoria_id', $categoriaId);
            })
            ->orderBy('nombre')
            ->get();

        $categorias = Categoria::orderBy('nombre')->get();

        return view('producto.movimientoMasivo', compact('productos', 'categorias', 'categoriaId'));
    }


    public function procesarMovimientoMasivo(Request $request)
    {
        $request->validate([
            'tipo_movimiento' => 'required|in:ingresar,extraer',
            'cantidades' => 'required|array',
        ]);

        $usuario = auth()->user();
        if (!$usuario) {
            return redirect()->back()->with('error', 'Debes iniciar sesión para realizar movimientos.');
        }

        foreach ($request->cantidades as $productoId => $cantidad) {
            if (is_numeric($cantidad) && $cantidad > 0) {
                $producto = Producto::find($productoId);

                if ($producto) {
                    if ($request->tipo_movimiento === 'extraer') {
                        if ($producto->cantidad < $cantidad) {
                            continue; 
                        }
                        $producto->cantidad -= $cantidad;
                    } else {
                        $producto->cantidad += $cantidad;
                    }

                    $producto->save();

                    // Registrar en la tabla de movimientos
                    \App\Models\Movimiento::create([
                        'tipo_movimiento' => $request->tipo_movimiento,
                        'cantidad' => $cantidad,
                        'producto_id' => $producto->id,
                        'nombre_producto' => $producto->nombre,
                        'usuario_id' => $usuario->id,
                        'nombre_usuario' => $usuario->name,
                    ]);
                }
            }
        }

        return redirect()->route('producto.movimientoMasivo')->with('success', 'Movimientos registrados con éxito.');
    }

}
