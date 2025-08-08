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

            // También cargamos todas las categorías para llenar el select
            $categorias = Categoria::orderBy('nombre')->get();

            return view('producto.index', compact('productos', 'busqueda', 'categorias', 'categoriaId'));
        }


    /**
     * Muestra el formulario de creación de un nuevo producto.
     */
    public function create()
    {
        $categorias = Categoria::orderBy('id', 'DESC')->select('id', 'nombre')->get();
        return view('producto.create', compact('categorias'));
    }

    /**
     * Almacena un nuevo producto en la base de datos.
     */
    public function store(Request $request)
    {
        // Validación
        $request->validate([
            'nombre' => 'required|unique:productos,nombre',
            'descripcion' => 'nullable',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cantidad' => 'required|integer|min:0',
            'min_stock' => 'nullable|integer|min:0',
            'categoria_id' => 'nullable|exists:categorias,id'
        ]);

        // Procesar imagen
        $nombreImagen = null;
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('img'), $nombreImagen);
        }

        // Crear el producto
        Producto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'imagen' => $nombreImagen,
            'cantidad' => $request->cantidad,
            'min_stock' => $request->min_stock,
            'categoria_id' => $request->categoria_id,
            'usuario_id' => auth()->id() // Asigna el usuario autenticado
        ]);

        return redirect()->route('producto.index')->with('success', 'Producto creado con éxito.');
    }

    /**
     * Muestra los detalles de un producto específico.
     */
    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        return view('producto.show', compact('producto'));
    }

    /**
     * Muestra el formulario de edición de un producto.
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        $categorias = Categoria::orderBy('id', 'DESC')->select('id', 'nombre')->get();
        return view('producto.edit', compact('producto', 'categorias'));
    }

    /**
     * Actualiza los datos de un producto existente.
     */
    public function update(Request $request, $id)
    {
        // Validación
        $request->validate([
            'nombre' => 'required|unique:productos,nombre,' . $id,
            'descripcion' => 'nullable',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cantidad' => 'required|integer|min:0',
            'min_stock' => 'nullable|integer|min:0',
            'categoria_id' => 'nullable|exists:categorias,id'
        ]);

        $producto = Producto::findOrFail($id);

        // Procesar imagen solo si se subió una nueva
        if ($request->hasFile('imagen')) {
            // Eliminar imagen anterior si existe
            if ($producto->imagen && file_exists(public_path('img/' . $producto->imagen))) {
                unlink(public_path('img/' . $producto->imagen));
            }
            $imagen = $request->file('imagen');
            $producto->imagen = time() . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('img'), $producto->imagen);
        }

        // Actualizar los datos del producto
        $producto->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'cantidad' => $request->cantidad,
            'min_stock' => $request->min_stock,
            'categoria_id' => $request->categoria_id
        ]);

        return redirect()->route('producto.index')->with('success', 'Producto actualizado con éxito.');
    }

    /**
     * Elimina un producto de la base de datos.
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);

        // Eliminar imagen asociada
        if ($producto->imagen && file_exists(public_path('img/' . $producto->imagen))) {
            unlink(public_path('img/' . $producto->imagen));
        }

        $producto->delete();

        return redirect()->route('producto.index')->with('success', 'Producto eliminado con éxito.');
    }
    public function agotados()
    {
        // Obtener productos agotados (cantidad == 0) o por agotarse (cantidad < min_stock)
        $productosAgotados = Producto::where('cantidad', 0)
                            ->orWhere(function($query) {
                                $query->whereColumn('cantidad', '<=', 'min_stock')
                                    ->whereNotNull('min_stock'); // Evitar comparar con NULL
                            })
                            ->orderBy('cantidad', 'asc')
                            ->get();

        // Retornar la vista con los productos filtrados
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
        $totalProductos = Producto::count(); // Cuenta todos los productos

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

    public function vistaActualizarCantidades()
    {
        $productos = Producto::orderBy('nombre')->with('categoria')->get();
        return view('producto.actualizarCantidades', compact('productos'));
    }


}
