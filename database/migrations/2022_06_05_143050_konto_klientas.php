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
            $table->integer('numer');
            $table->integer('iban');
            $table->integer('swift');
        });

        Schema::table('kliencis', function (Blueprint $table) {
            $table->unsignedBigInteger('konto_id')->after('telefon');
            $table->foreign('konto_id')->references('id')->on('konto_klientas');
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
