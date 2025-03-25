<?php

namespace App\Http\Controllers;

use App\Models\Bodega;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BodegaController extends Controller
{
    public function registrarIntento()
    {
        $user = Auth::user(); // Verificamos si hay usuario autenticado

        Bodega::create([
            'user_id' => $user?->id, // Usamos null si no hay usuario
            'nombre_usuario' => $user?->name ?? 'Invitado', // Guardamos nombre o "Invitado"
            'accion' => 'Ingreso a bodega',
        ]);

        return response()->json(['success' => true]);
    }


public function verHistorial(Request $request)
{
    $query = Bodega::query();

    // Filtrar por usuario si viene en la solicitud
    if ($request->filled('usuario')) {
        $query->where('user_id', $request->usuario);
    }

    // Filtrar por fecha desde
    if ($request->filled('desde')) {
        $query->whereDate('created_at', '>=', $request->desde);
    }

    // Filtrar por fecha hasta
    if ($request->filled('hasta')) {
        $query->whereDate('created_at', '<=', $request->hasta);
    }

    $registros = $query->latest()->get();
    $usuarios = User::all(); // Para el selector

    return view('bodega.historial', compact('registros', 'usuarios'));
}


}
