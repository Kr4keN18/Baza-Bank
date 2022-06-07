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
        Schema::create('konto_klientas', function (Blueprint $table) {
            $table->id('id');
            $table->double('saldo');
            $table->string('numer');
            $table->string('iban', 30);
            $table->string('swift', 30);
        });

        Schema::table('konto_klientas', function (Blueprint $table) {
            $table->unsignedBigInteger('konto_id');
            $table->foreign('konto_id')->references('id')->on('konto_klientas');
        });

        Schema::table('konto_klientas', function (Blueprint $table) {
            $table->unsignedBigInteger('karta_id');
            $table->foreign('karta_id')->references('id')->on('karta__platniczas');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konto__klientas');


        Schema::table('kliencis', function (Blueprint $table) {
            $table->dropForeign('kontoklient_kliencis_id_foreign');
            $table->dropColumn('konto_id');
        });

    }
};
