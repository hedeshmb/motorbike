<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotorbikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motorbikes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->string('make',255);
            $table->string('modelMotorbike')->unique();
            $table->integer('engineSize');
            $table->integer('year');
            $table->string('color',255);
            $table->integer('weight');
            $table->integer('price');
            $table->string('image',255)->nullable(TRUE);
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
        Schema::dropIfExists('mototrbikes');
    }
}
