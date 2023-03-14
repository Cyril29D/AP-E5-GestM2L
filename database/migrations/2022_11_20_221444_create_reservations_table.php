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
        Schema::create('reservations', function (Blueprint $table) {
            $table->integer('id');
            $table->date('dateres');
            $table->time('heuredeb');
            $table->time('heurefin');
            $table->char('batiment',1);
            $table->text('complement');
            $table->text('motif');
            $table->char('codeclient',9);
            $table->integer('numsalle');

            $table->foreign('numSalle')->references('numeroSalle')->on('salles');
            $table->foreign('codeclient')->references('codeCli')->on('clients');

            
            $table->primary('id');
            $table->charset = 'utf8mb4';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
