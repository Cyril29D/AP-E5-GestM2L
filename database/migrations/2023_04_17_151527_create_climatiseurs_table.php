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
        Schema::create('climatiseurs', function (Blueprint $table) {
            $table->id();
            $table->text('marque');
            $table->text('modele');
            $table->integer('puissance');
            $table->integer('surfaceMin');
            $table->integer('surfaceMax');
            $table->char('bat',1);
            $table->integer('numSalle');

            $table->foreign('numSalle')->references('numeroSalle')->on('salles');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('climatiseurs');
    }
};
