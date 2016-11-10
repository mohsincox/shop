<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganicFruitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organic_fruits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code');
            $table->string('image');
            $table->string('quantity');
            $table->string('price');
            $table->text('description');
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
        Schema::drop('organic_fruits');
    }
}
