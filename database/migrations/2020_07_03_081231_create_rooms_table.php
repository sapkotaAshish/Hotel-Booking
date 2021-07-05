<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('room_id');
            $table->string('type');
            $table->integer('price');
            $table->integer('no_of_bed');
            $table->date('booking_open')->nullable();
            $table->date('booking_close')->nullable();
            $table->boolean('status')->default('1');
            $table->boolean('television')->nullable();
            $table->boolean('AC')->nullable();
            $table->boolean('bathroom')->nullable();
            $table->boolean('railing')->nullable();
            $table->string('description',200)->nullable();
            $table->string('pic');
            $table->unsignedInteger('user_id')->nullable();
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
        Schema::dropIfExists('rooms');
    }
}
