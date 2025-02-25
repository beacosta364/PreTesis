<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id(); // Identificador único de la categoría
            $table->string('nombre', 100)->unique(); // Nombre de la categoría (debe ser único)
            $table->text('descripcion')->nullable(); // Descripción opcional de la categoría
            $table->boolean('status')->default(true); // Estado de la categoría
            $table->timestamps(); // Timestamps de creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
};