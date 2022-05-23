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
        Schema::create('pracownicies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imie', 30);
            $table->string('nazwisko', 40);
            $table->string('plec', 10);
            $table->text('adres_zamieszkania');
            $table->string('email', 255);
            $table->string('telefon', 9);
            $table->string('login', 255);
            $table->string('haslo', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pracownicies');
    }
};
