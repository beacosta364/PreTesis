<?php

namespace App\Http\Controllers;

use App\Models\Bodega;
use Illuminate\Http\Request;
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

    public function verHistorial()
    {
        $registros = Bodega::latest()->get(); 

        return view('bodega.historial', compact('registros'));
    }


}
