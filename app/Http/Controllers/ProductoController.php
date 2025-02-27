<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Muestra una lista de los productos paginados.
     */
    public function index()
    {
        $productos = Producto::orderBy('id', 'ASC')->paginate(5);
        return view('producto.index', compact('productos'));
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
}
