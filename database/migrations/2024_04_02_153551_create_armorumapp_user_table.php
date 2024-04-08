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
        Schema::create('armorumapp_user', function (Blueprint $table) {
            $table->dateTime('last_login', 6)->nullable();
            $table->boolean('is_superuser');
            $table->bigInteger('id', true);
            $table->string('username', 15)->unique('username');
            $table->string('password', 256);
            $table->string('email', 100);
            $table->boolean('isActive');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('armorumapp_user');
    }
};
