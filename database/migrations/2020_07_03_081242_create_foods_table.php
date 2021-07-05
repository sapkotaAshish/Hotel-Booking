<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
          
            $table->increments('food_id');
            $table->string('name');
            $table->string('type');
            $table->string('price');
            $table->string('description');
            $table->string('images')->nullable();
            $table->integer('hotel_id')->unsigned();
            $table->foreign('hotel_id')->references('hotel_id')->on('hotels')->onDelete('cascade');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
