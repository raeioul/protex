<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePreciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('precios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('precio')->nullable();
            $table->integer('cantidad')->nullable();
            $table->date('etd')->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('producto_id')->unsigned();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('precios');
    }
}
