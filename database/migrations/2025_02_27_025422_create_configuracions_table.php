<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// return new class extends Migration
class CreateConfiguracionsTable extends Migration
{
    public function up()
    {
        Schema::create('configuracions', function (Blueprint $table) {
            $table->id();
            $table->string('ip')->unique(); // Asegúrate de que la IP sea única
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('configuracions');
    }
}
