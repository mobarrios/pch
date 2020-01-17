<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operativos', function (Blueprint $table) {
            

        $table->increments('id');
        $table->string('nombre');
        $table->string('dia');
        $table->string('horario'); 

        $table->integer('programas_id')->unsigned()->nullable();
        $table->foreign('programas_id')
            ->references('id')->on('programas')
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
        Schema::dropIfExists('operativos');
    }
}
