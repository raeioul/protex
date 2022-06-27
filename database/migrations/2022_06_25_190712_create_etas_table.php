<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEtasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('eta')->nullable();
            $table->integer('operation_id')->unsigned();
            $table->integer('user_id')->unsigned();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('etas');
    }
}
