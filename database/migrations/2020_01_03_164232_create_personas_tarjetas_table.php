<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTarjetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas_tarjetas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('tarjetas_id')->unsigned()->nullable();
            $table->integer('personas_id')->unsigned()->nullable();
            $table->integer('operativos_id')->unsigned()->nullable();
            

            $table->foreign('tarjetas_id')
                ->references('id')->on('tarjetas')
                ->onDelete('cascade');

            $table->foreign('personas_id')
                ->references('id')->on('personas')
                ->onDelete('cascade');  
                
            $table->foreign('operativos_id')
                ->references('id')->on('operativos')
                ->onDelete('cascade');


            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas_tarjetas');
    }
}
