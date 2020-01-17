<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('nro_documento',9)->nullable();
            $table->string('cuit',11)->unique()->nullable();
            $table->string('mail')->nullable();
            $table->string('telefono')->nullable();
            $table->date('fecha_nacimiento')->nullable();

            // $table->string('tipo_documento_id',2);
           
            $table->integer('generos_id')->unsigned()->nullable();
            $table->integer('tipo_documento_id')->unsigned()->nullable();
            $table->integer('estado_civil_id')->unsigned()->nullable();

            $table->string('tipo_doc')->nullable();
            $table->string('genero')->nullable();
            $table->string('estado_civil')->nullable();


            $table->integer('operativos_id')->unsigned()->nullable();
            
            $table->foreign('generos_id')
                ->references('id')->on('generos')
                ->onDelete('cascade');

            $table->foreign('tipo_documento_id')
                ->references('id')->on('tipos_documentos')
                ->onDelete('cascade');

            $table->foreign('estado_civil_id')
                ->references('id')->on('estado_civil')
                ->onDelete('cascade');  


            $table->foreign('operativos_id')
                ->references('id')->on('operativos')
                ->onDelete('cascade');                      

            // $table->foreign('operativos_id')
            //     ->references('id')->on('operativos')
            //     ->onDelete('cascade');                      



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
        Schema::dropIfExists('personas');
    }
}
