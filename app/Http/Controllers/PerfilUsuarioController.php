<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\PerfilUsuario;

class PerfilUsuarioController extends Controller
{
    public function actualizarFotoPerfil(Request $request)
    {
        $request->validate([
            'foto_perfil' => 'required|image|mimes:jpg,jpeg,png|max:2048' // Solo imágenes de hasta 2MB
        ]);

        $usuario = Auth::user();
        $perfil = $usuario->perfil;

        if ($perfil) {
            $perfil->eliminarFotoAnterior(); // Elimina la imagen anterior si existe
        } else {
            $perfil = new PerfilUsuario(['usuario_id' => $usuario->id]);
        }

        // Guardar la nueva imagen
        $nombreArchivo = time() . '.' . $request->foto_perfil->extension();
        // $request->foto_perfil->storeAs('public/img-perfil', $nombreArchivo);
        $request->foto_perfil->move(public_path('img-perfil'), $nombreArchivo);


        // Actualizar la base de datos con la nueva imagen
        $perfil->foto_perfil = $nombreArchivo;
        $perfil->save();

        return back()->with('success', 'Foto de perfil actualizada correctamente.');
    }
}
