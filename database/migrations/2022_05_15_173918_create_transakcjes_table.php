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
            $table->string('nazwa');
            $table->string('typ');
            $table->string('stan');
            $table->string('nadawca');
            $table->string('odbiorca');
            $table->float('kwota');
            $table->date('data_wykonania');
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
