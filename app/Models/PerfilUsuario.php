<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PerfilUsuario extends Model
{
    use HasFactory;

    protected $table = 'perfil_usuarios';

    protected $fillable = ['usuario_id', 'foto_perfil'];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    // Función para eliminar la foto anterior antes de actualizar
    public function eliminarFotoAnterior()
    {
        if ($this->foto_perfil && Storage::exists('public/img-perfil/' . $this->foto_perfil)) {
            Storage::delete('public/img-perfil/' . $this->foto_perfil);
        }
    }
}
