<?php

namespace App\Http\Controllers;

use App\Models\Configuracion;
use Illuminate\Http\Request;

class ConfiguracionController extends Controller
{
    public function index()
    {
        // Obtener el único registro de configuración
        $configuracion = Configuracion::first(); // Esto obtendrá el primer registro, si existe

        // Retornar la vista con la configuración (si existe)
        return view('configuracion.index', compact('configuracion'));
    }

    public function create()
    {
        return view('configuracion.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ip' => 'required|ip',
        ]);

        // Verificar si ya existe un registro
        if (Configuracion::exists()) {
            return redirect()->route('configuracion.edit')->with('warning', 'Ya existe una IP registrada. Edítala en su lugar.');
        }

        // Si no existe, se crea el nuevo registro
        $configuracion = new Configuracion();
        $configuracion->ip = $request->ip;
        $configuracion->save();

        return redirect()->route('configuracion.index')->with('success', 'IP guardada correctamente');
    }

    public function show(Configuracion $configuracion)
    {
        //
    }

    public function edit(Configuracion $configuracion)
    {
        $configuracion = Configuracion::first(); // Obtener el único registro
        return view('configuracion.edit', compact('configuracion'));
    }

    public function update(Request $request, Configuracion $configuracion)
    {
        $request->validate([
            'ip' => 'required|ip',
        ]);

        $configuracion = Configuracion::first();
        $configuracion->ip = $request->ip;
        $configuracion->save();

        return redirect()->route('configuracion.index')->with('success', 'IP actualizada correctamente');
    }

    public function destroy(Configuracion $configuracion)
    {
        //
    }

    public function control()
    {
        $configuracion = Configuracion::first(); // Obtener la configuración

        // Si no existe configuración, enviar una variable con el estado
        if (!$configuracion) {
            return view('configuracion.control', ['configuracion' => null]); // Pasamos 'null' si no existe la configuración
        }

        return view('configuracion.control', compact('configuracion'));
    }
}

