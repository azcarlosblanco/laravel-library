<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->string('author');
          $table->string('editorial');

          $table->text('content');

          $table->integer('user_id')->unsigned();
          $table->integer('category_id')->unsigned();

          $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

          $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');

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
        Schema::drop('resources');
    }
}
