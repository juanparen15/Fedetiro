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
        Schema::create('armorumapp_parametros', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nombre_parametro', 256);
            $table->longText('valor_parametro');
            $table->dateTime('register_date', 6);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('armorumapp_parametros');
    }
};
