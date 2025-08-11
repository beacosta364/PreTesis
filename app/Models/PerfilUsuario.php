<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PerfilUsuario extends Model
{
    use HasFactory;

    protected $table = 'perfil_usuarios';

    protected $fillable = ['usuario_id', 'foto_perfil'];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }


    public function eliminarFotoAnterior()
    {
        if ($this->foto_perfil && $this->foto_perfil !== 'face1.jpg') {
            $ruta = public_path('img-perfil/' . $this->foto_perfil);
            if (File::exists($ruta)) {
                File::delete($ruta);
            }
        }
    }
}
