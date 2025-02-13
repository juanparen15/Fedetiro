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
        Schema::table('armorumapp_tercero', function (Blueprint $table) {
            $table->foreign(['user_id'], 'ArmorumApp_tercero_user_id_a9b2fa7e_fk_ArmorumApp_user_id')->references(['id'])->on('armorumapp_user')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('armorumapp_tercero', function (Blueprint $table) {
            $table->dropForeign('ArmorumApp_tercero_user_id_a9b2fa7e_fk_ArmorumApp_user_id');
        });
    }
};
