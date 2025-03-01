<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo_movimiento', ['ingresar', 'extraer']);
            $table->integer('cantidad');
            $table->foreignId('producto_id')->nullable()->constrained('productos')->nullOnDelete();
            $table->string('nombre_producto'); // Guarda el nombre del producto
            $table->foreignId('usuario_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('nombre_usuario'); // Guarda el nombre del usuario
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('movimientos');
    }
};


