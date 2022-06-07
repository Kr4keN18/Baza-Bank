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
        Schema::create('transakcjes', function (Blueprint $table) {
            $table->id();
            $table->string('tytul', 255);
            $table->float('kwota');
            $table->string('nadawca', 255);
            $table->string('odbiorca', 255);
            $table->timestamp('data_wykonania');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transakcjes');
    }
};
