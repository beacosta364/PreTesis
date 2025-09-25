<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('acciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('controlador_id');

            $table->unsignedBigInteger('user_id')->nullable(); 
            $table->string('nombre_usuario')->default('Invitado'); 
            
            $table->enum('estado', ['exitoso', 'fallido']);
            $table->timestamp('fecha_hora')->useCurrent();
            $table->foreign('controlador_id')->references('id')->on('controladores')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('acciones');
    }
};
