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
        Schema::create('karta_platnicza', function (Blueprint $table) {
            $table->id();
            $table->string('numer', 16);
            $table->string('cvc', 3);
            $table->date('okres_waznosci');
            $table->string('nazwa_banku', 10);
            //$table->foreign('konto_klienta_id')->references('id')->on('konto_klienta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karta_platnicza');
    }
};
