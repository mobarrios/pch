<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarjetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarjetas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero')->nullable();
            $table->string('numero_cuenta')->nullable();
            $table->float('importe', 8, 2)->nullable();
            
            $table->integer('retiro_operativo')->nullable();
            $table->integer('retiro_sucursal')->nullable();
            $table->string('retiro_fecha')->nullable();
            $table->string('retiro_hora')->nullable();


            $table->integer('sucursales_id')->unsigned()->nullable();

            $table->foreign('sucursales_id')
            ->references('id')->on('sucursales')
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
        Schema::dropIfExists('tarjetas');
    }
}
