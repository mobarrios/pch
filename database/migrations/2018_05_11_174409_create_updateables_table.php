<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpdateablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('updateables', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('entities_id');
            $table->string('entities_type');
            $table->integer('users_id');
            $table->string('column');
            $table->string('old_data')->nullable();
            $table->string('new_data');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('updateables');
    }
}
