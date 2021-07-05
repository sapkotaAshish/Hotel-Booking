<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('event_id');
            $table->string('name');
            $table->string('type');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('description');
            $table->string('imagea')->nullable();
            $table->string('imageb')->nullable();
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
        Schema::dropIfExists('events');
    }
}
