<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('notificaciones', function (Blueprint $table) {
            $table->id();
            $table->string('titulo'); // Título de la notificación
            $table->text('mensaje'); // Mensaje de la notificación
            $table->boolean('leida')->default(false); // Estado de lectura
            $table->unsignedBigInteger('usuario_id')->nullable(); // Usuario que creó la notificación
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('notificaciones');
    }
};

