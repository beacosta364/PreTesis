<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'nombre', 
        'descripcion', 
        'imagen', 
        'cantidad', 
        'min_stock', 
        'usuario_id', 
        'categoria_id'
    ];

    // Relación con la categoría
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    // Relación con el usuario que creó el producto
    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id')->withDefault([
            'name' => 'Usuario eliminado' // Para evitar errores si el usuario se borra
        ]);
    }

    public function movimientos()
    {
        return $this->hasMany(Movimiento::class, 'producto_id');
    }

}
