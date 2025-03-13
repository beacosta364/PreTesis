<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('perfil_usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id')->unique(); // Relación con usuarios
            $table->string('foto_perfil')->nullable(); // Almacena el nombre del archivo
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('perfil_usuarios');
    }
};
