<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('bio')->nullable();
            $table->integer('country')->unsigned()->nullable();
            $table->integer('city')->unsigned()->nullable();
            $table->enum('level', ['admin', 'customer'])->default('customer');
            $table->string('image', 100)->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('country')->references('id')->on('countries')
                ->onDelete('cascade');

            $table->foreign('city')->references('id')->on('cities')
                ->onDelete('cascade');

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
