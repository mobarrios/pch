<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('programas', function (Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('operativos', function (Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('bancos', function (Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('sucursales', function (Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('tipos_documentos', function (Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('generos', function (Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('personas', function (Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('operativos_personas', function (Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('tarjetas', function (Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('personas_tarjetas', function (Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('liquidaciones', function (Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('consumos', function (Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('geos', function (Blueprint $table){
            $table->softDeletes();
        });
        Schema::table('users_operativos', function (Blueprint $table){
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
 
        Schema::table('users', function (Blueprint $table){
            $table->dropColumn('deleted_at');
        });
        Schema::table('programas', function (Blueprint $table){
            $table->dropColumn('deleted_at');
        });
        Schema::table('operativos', function (Blueprint $table){
            $table->dropColumn('deleted_at');
        });
        Schema::table('bancos', function (Blueprint $table){
            $table->dropColumn('deleted_at');
        });
        Schema::table('sucursales', function (Blueprint $table){
            $table->dropColumn('deleted_at');
        });
        Schema::table('tipos_documentos', function (Blueprint $table){
            $table->dropColumn('deleted_at');
        });
        Schema::table('generos', function (Blueprint $table){
            $table->dropColumn('deleted_at');
        });
        Schema::table('personas', function (Blueprint $table){
            $table->dropColumn('deleted_at');
        });
        Schema::table('operativos_personas', function (Blueprint $table){
            $table->dropColumn('deleted_at');
        });
        Schema::table('tarjetas', function (Blueprint $table){
            $table->dropColumn('deleted_at');
        });
        Schema::table('personas_tarjetas', function (Blueprint $table){
            $table->dropColumn('deleted_at');
        });
        Schema::table('liquidaciones', function (Blueprint $table){
            $table->dropColumn('deleted_at');
        });
        Schema::table('consumos', function (Blueprint $table){
            $table->dropColumn('deleted_at');
        });
        Schema::table('geos', function (Blueprint $table){
            $table->dropColumn('deleted_at');
        });
        Schema::table('users_operativos', function (Blueprint $table){
            $table->dropColumn('deleted_at');
        });
     
    }
}
