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
        Schema::create('armorumapp_solicitud', function (Blueprint $table) {
            $table->integer('id', true);
            $table->dateTime('fecha_solicitud', 6);
            $table->string('documento_tercero', 50);
            $table->string('tipo_peticion', 2560);
            $table->string('asunto', 200);
            $table->string('mensaje', 256);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('armorumapp_solicitud');
    }
};
