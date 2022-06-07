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
        Schema::create('kliencis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imie', 30);
            $table->string('nazwisko', 40);
            $table->string('plec', 10);
            //$table->date('data_urodzenia');
            $table->string('PESEL', 11);
            $table->string('adres_zamieszkania');
            $table->string('telefon', 9);
            
            
        });


        Schema::table('kliencis', function (Blueprint $table) {
            $table->unsignedBigInteger('klient_id');
            $table->foreign('klient_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kliencis');
    }
};
