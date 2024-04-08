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
        Schema::create('armorumapp_radicado', function (Blueprint $table) {
            $table->string('codigo_radicado', 20)->primary();
            $table->dateTime('fecha_radicacion', 6);
            $table->string('documento_tercero', 50);
            $table->string('tipo_peticion', 2560);
            $table->string('estado', 40);
            $table->dateTime('fecha_respuesta', 6);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('armorumapp_radicado');
    }
};
