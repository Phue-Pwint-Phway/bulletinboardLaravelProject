<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->char('title');
            $table->char('description');
            $table->char('status');

            $table->bigInteger('create_user_id')->unsigned();
            // $table->foreign('create_user_id')->references('id')->on('users');

            $table->bigInteger('updated_user_id')->unsigned();
            // $table->foreign('updated_user_id')->refernces('id')->on('users');

            $table->integer('deleted_user_id')->nullable();
            $table->dateTime('post_created_at')->nullable();
            $table->dateTime('post_updated_at')->nullable();
            $table->dateTime('post_deleted_at')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
