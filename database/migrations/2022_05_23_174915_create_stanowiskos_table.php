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
        Schema::create('stanowiskos', function (Blueprint $table) {
            $table->id('id');
            $table->string('nazwa', 30);
            $table->double('pensja');
        });


        Schema::table('pracownicies', function (Blueprint $table) {
            $table->unsignedBigInteger('stanowisko_id')->after('haslo');
            $table->foreign('stanowisko_id')->references('id')->on('stanowiskos');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stanowiskos');


        Schema::table('pracownicies', function (Blueprint $table) {
            $table->dropForeign('pracownicies_stanowisko_id_foreign');
            $table->dropColumn('stanowisko_id');
        });

        
    }
};
