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
        Schema::create('konto_klienta', function (Blueprint $table) {
            $table->increments('id');
            $table->double('saldo');
            $table->integer('numer');
            $table->string('login', 255);
            $table->string('haslo', 255);
            //$table->foreign('klienci_id')->references('id')->on('klienci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konto_klienta');
    }
};
