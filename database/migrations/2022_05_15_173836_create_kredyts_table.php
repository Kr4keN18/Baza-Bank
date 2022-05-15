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
        Schema::create('kredyts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('typ', 255);
            $table->integer('ilosc_rat');
            //$table->foreign('klienci_id')->references('id')->on('klienci');
            //$table->foreign('pracownicy_id')->references('id')->on('pracownicy');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kredyts');
    }
};
