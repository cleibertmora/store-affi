<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug', 255)->unique();
            $table->string('seo_title', 255)->nullable();
            $table->text('meta_description')->nullable();
            $table->text('description')->nullable();
            $table->text('texto_header')->nullable();
            $table->text('texto_footer')->nullable();
            $table->integer('user_id')->unsigned();
            $table->string('imagen', 255)->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('categories');
    }
}
