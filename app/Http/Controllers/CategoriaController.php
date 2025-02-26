<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias=Categoria::orderBy('id','ASC')->paginate(20);
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        //
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        //
        $validacionDatos=$request->validate([
            // 'nombre' => 'required|max:255',
            'nombre' => 'required|max:255|unique:categorias,nombre',
            'descripcion' => 'nullable|max:500',
            'status' => 'required|boolean',
        ], [
            'nombre.unique' => 'Ya existe una categoría con este nombre. Por favor, ingrese otro.',
        ]);
    

        $categoria=new Categoria();
        $categoria->nombre=$validacionDatos['nombre'];
        $categoria->descripcion=$validacionDatos['descripcion'];
        // $categoria->descripcion = $validacionDatos['descripcion'] ?? null;
        $categoria->status=$validacionDatos['status'];

        $categoria->save();
        // Categoria::create($request->all());
        return redirect()->route('categoria.index')->with('success', 'Categoría creada con éxito');
    }


    public function show($id)
    {
        $categoria=Categoria::findOrFail($id);
        return view('categorias.show', compact('categoria'));

    }

    public function edit($id)
    {
        //
        $categoria = Categoria::findOrFail($id);
        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'nullable',
            'status' => 'required|boolean',
        ]);

        //buscar el registro que se va actualizar

        $categoria=Categoria::findOrFail($id);
        $categoria->nombre = $validatedData['nombre'];
        $categoria->descripcion = $validatedData['descripcion'];
        $categoria->status = $validatedData['status'];

        // Guardar la categoría en la base de datos
        $categoria->save();    
        // Redirigir a la lista de categorías con un mensaje de éxito
        return redirect()->route('categoria.index');
    }

    public function destroy($id)
    {
        $categoria=Categoria::findOrFail($id);
        $categoria->delete();
        return redirect()->route('categoria.index');
    }
}




