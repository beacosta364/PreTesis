<?php

namespace App\Http\Controllers;

use App\Models\Configuracion;
use Illuminate\Http\Request;

class ConfiguracionController extends Controller
{
    public function index()
    {
        $configuracion = Configuracion::first(); 

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

        if (Configuracion::exists()) {
            return redirect()->route('configuracion.edit')->with('warning', 'Ya existe una IP registrada. Edítala en su lugar.');
        }

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
        $configuracion = Configuracion::first(); 
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
        $configuracion = Configuracion::first(); 

        if (!$configuracion) {
            return view('configuracion.control', ['configuracion' => null]); 
        }

        return view('configuracion.control', compact('configuracion'));
    }
}

