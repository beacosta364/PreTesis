<?php

namespace App\Http\Controllers;
use App\Models\Bodega;


use Illuminate\Http\Request;

class BodegaController extends Controller
{
    public function registrarIntento()
{
    // Crear nuevo intento con user_id null y acción por defecto
    Bodega::create([
        'user_id' => null, // Si tuvieras auth, aquí pondrías auth()->id()
    ]);

    return response()->json(['success' => true]);
}
}




