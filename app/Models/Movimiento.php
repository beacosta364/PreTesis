<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;

    // Permite la asignación masiva de estos atributos
    protected $fillable = [
        'tipo_movimiento', 
        'cantidad', 
        'producto_id', 
        'nombre_producto', 
        'usuario_id', 
        'nombre_usuario'
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id')->withDefault();
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id')->withDefault();
    }

}
