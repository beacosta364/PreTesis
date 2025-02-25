<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{  
    use HasFactory;

    protected $table="categorias";
    //colummnas
    protected $fillable=["nombre","descripcion","status"];

    //relacion con productos: uno a muchos
    public function productos(){
        return $this->hasMany(Producto::class, 'categoria_id');
    }
}
