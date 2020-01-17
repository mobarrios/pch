<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('latitud')->nullable();
            $table->string('longitud')->nullable();
            $table->string('calle')->nullable();
            $table->string('numero')->nullable();
            $table->string('piso')->nullable();
            $table->string('depto')->nullable();
            $table->string('cod_post')->nullable();
            $table->string('pais')->nullable();
            $table->string('provincia')->nullable();
            $table->string('localidad')->nullable();
            $table->string('municipio')->nullable();
            
            $table->string('cod_provincia')->nullable();
            $table->string('cod_localidad')->nullable();
            $table->string('cod_municipio')->nullable();

            $table->integer('entities_id');
            $table->string('entities_type');


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
        Schema::dropIfExists('geos');
    }
}
