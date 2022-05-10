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
        Schema::create('transakcje', function (Blueprint $table) {
            $table->id();
            $table->string('nazwa', 255);
            $table->string('typ', 255);
            $table->string('stan', 20);
            $table->string('nadawca', 255);
            $table->string('odbiorca', 255);
            $table->double('kwota');
            $table->timestamp('data_wykonania');
            //$table->foreign('konto_klienta_id')->references('id')->on('konto_klienta');
            //$table->foreign('pracownicy_id')->references('id')->on('pracownicy');
            //$table->foreign('kredyt_id')->references('id')->on('kredyt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transakcje');
    }
};
