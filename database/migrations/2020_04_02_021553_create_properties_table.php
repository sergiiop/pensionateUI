<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertiesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('badrooms_number');
            $table->integer('rooms_number');
            $table->integer('space_available');
            $table->integer('type_id')->unsigned();
            $table->integer('neighborhood_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('property_type');
            $table->foreign('neighborhood_id')->references('id')->on('neighborhood');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('properties');
    }
}
