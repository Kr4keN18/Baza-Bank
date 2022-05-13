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
        Schema::create('kantor', function (Blueprint $table) {
            $table->increments('id');
            $table->float('kurs');
            //$table->foreign('pracownicy_id')->references('id')->on('pracownicy');
            //$table->foreign('waluta_id')->references('id')->on('waluta_id');
            //$table->foreign('waluta2_id')->references('id')->on('waluta_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kantor');
    }
};
