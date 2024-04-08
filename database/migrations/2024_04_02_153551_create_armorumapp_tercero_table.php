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
        Schema::create('armorumapp_tercero', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('tipo_documento');
            $table->string('documento_tercero', 50)->unique('documento_tercero');
            $table->string('primer_nombre', 2560)->nullable();
            $table->string('segundo_nombre', 2560)->nullable();
            $table->string('primer_apellido', 2560)->nullable();
            $table->string('segundo_apellido', 2560)->nullable();
            $table->string('movil', 2560)->nullable();
            $table->string('direccion', 2560)->nullable();
            $table->boolean('dataSinc');
            $table->boolean('isActive');
            $table->bigInteger('user_id')->index('armorumapp_tercero_user_id_a9b2fa7e_fk_armorumapp_user_id');
            $table->integer('codigo_municipio_residencia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('armorumapp_tercero');
    }
};
