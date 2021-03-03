<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name')->unique();
            $table->char('email')->unique();
            $table->text('password');
            $table->char('profile');
            $table->char('type');
            $table->char('phone')->nullable();
            $table->char('address')->nullable();
            $table->date('dob')->nullable();

            $table->bigInteger('create_user_id')->unsigned();
            // $table->foreign('create_user_id')->references('id')->on('users');

            $table->bigInteger('updated_user_id')->unsigned();
            // $table->foreign('updated_user_id')->refernces('id')->on('users');

            $table->integer('deleted_user_id')->nullable();
            $table->dateTime('user_created_at')->nullable();
            $table->dateTime('user_updated_at')->nullable();
            $table->dateTime('user_deleted_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
