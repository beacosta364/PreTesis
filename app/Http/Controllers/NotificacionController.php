<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notificacion;

class NotificacionController extends Controller
{
    public function index()
    {
        $notificaciones = Notificacion::orderBy('created_at', 'desc')->get();
        return view('notificaciones.index', compact('notificaciones'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'mensaje' => 'required|string'
        ]);

        Notificacion::create([
            'titulo' => $request->titulo,
            'mensaje' => $request->mensaje
        ]);

        return redirect()->route('notificaciones.index')->with('success', 'Notificación creada.');
    }

    public function edit($id)
    {
        $notificacion = Notificacion::findOrFail($id);
        return view('notificaciones.edit', compact('notificacion'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'mensaje' => 'required|string'
        ]);

        $notificacion = Notificacion::findOrFail($id);
        $notificacion->update([
            'titulo' => $request->titulo,
            'mensaje' => $request->mensaje
        ]);

        return redirect()->route('notificaciones.index')->with('success', 'Notificación actualizada.');
    }

    public function destroy($id)
    {
        $notificacion = Notificacion::findOrFail($id);
        $notificacion->delete();

        return redirect()->route('notificaciones.index')->with('success', 'Notificación eliminada.');
    }
}
