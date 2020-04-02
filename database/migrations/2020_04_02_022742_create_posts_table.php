<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->timestamp('post_date');
            $table->longText('description');
            $table->boolean('status');
            $table->integer('user_id')->unsigned();
            $table->integer('property_id')->unsigned();
            $table->integer('typeproperty_id')->unsigned();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('property_id')->references('id')->on('properties');
            $table->foreign('typeproperty_id')->references('id')->on('property_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
