<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperativosPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operativos_personas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('operativos_id')->unsigned()->nullable();
            $table->integer('personas_id')->unsigned()->nullable();
            

            $table->foreign('operativos_id')
                ->references('id')->on('operativos')
                ->onDelete('cascade');

            $table->foreign('personas_id')
                ->references('id')->on('personas')
                ->onDelete('cascade');    

            $table->boolean('concurrio')->default(0);

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
        Schema::dropIfExists('operativos_personas');
    }
}
