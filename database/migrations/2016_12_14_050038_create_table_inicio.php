<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInicio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('page');
            $table->string('banner_inicio');
            $table->string('first_title');
            $table->text('second_title');
            $table->string('banner_title_img');
            $table->string('first_title2');
            $table->text('second_title2');
            $table->string('banner_title2_img');
            $table->string('first_title3');
            $table->text('second_title3');
            $table->string('banner_title3_img');
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
        Schema::drop('inicio');
    }
}
