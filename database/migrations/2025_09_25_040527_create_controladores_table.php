<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
{
    Schema::create('controladores', function (Blueprint $table) {
        $table->id();
        $table->string('nombre')->nullable();
        $table->string('ip');
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('controladores');
    }
};
