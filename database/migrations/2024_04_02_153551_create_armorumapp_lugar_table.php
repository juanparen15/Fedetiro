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
        Schema::create('armorumapp_lugar', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('codigo_lugar');
            $table->integer('codigo_lugar_pertenece');
            $table->integer('codigo_tipo_lugar');
            $table->string('nombre_lugar', 256);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('armorumapp_lugar');
    }
};
