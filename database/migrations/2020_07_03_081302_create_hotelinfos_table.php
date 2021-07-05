<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotelinfos', function (Blueprint $table) {
            $table->increments('hotelinfo_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('phone');
            $table->integer('mobile');
            $table->string('description');
            $table->string('imagea')->nullable();
            $table->string('imageb')->nullable();
            $table->string('imagec')->nullable();
            $table->integer('hotel_id')->unsigned();
            $table->foreign('hotel_id')->references('hotel_id')->on('hotels')->onDelete('cascade');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotelinfos');
    }
}
