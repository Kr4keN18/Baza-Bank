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
        Schema::create('pracownicy', function (Blueprint $table) {
            $table->id();
            $table->string('imie', 30);
            $table->string('nazwisko', 40);
            $table->string('plec', 10);
            $table->text('adres_zamieszkania');
            $table->string('email', 255);
            $table->string('telefon', 9);
            $table->string('login', 255);
            $table->string('haslo', 255);
            //$table->foreign('stanowisko_id')->references('id')->on('stanowisko');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pracownicy');
    }
};
