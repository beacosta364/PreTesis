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
        $user = Auth::user(); 

        Bodega::create([
            'user_id' => $user?->id, 
            'nombre_usuario' => $user?->name ?? 'Invitado', 
            'accion' => 'Ingreso a bodega',
        ]);

        return response()->json(['success' => true]);
    }


public function verHistorial(Request $request)
{
    $query = Bodega::query();

    if ($request->filled('usuario')) {
        $query->where('user_id', $request->usuario);
    }

    if ($request->filled('desde')) {
        $query->whereDate('created_at', '>=', $request->desde);
    }

    if ($request->filled('hasta')) {
        $query->whereDate('created_at', '<=', $request->hasta);
    }

    $registros = $query->latest()->get();
    $usuarios = User::all(); 

    return view('bodega.historial', compact('registros', 'usuarios'));
}


}
