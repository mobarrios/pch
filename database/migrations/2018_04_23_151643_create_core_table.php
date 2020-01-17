<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('string');
            $table->double('double',10.2);
            $table->tinyInteger('tiny');
            $table->date('date');
            $table->text('text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core');
    }
}
