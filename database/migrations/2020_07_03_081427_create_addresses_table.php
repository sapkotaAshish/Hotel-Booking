<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('address_id');
            $table->string('country');
            $table->string('state');
            $table->string('district');
            $table->string('city');
            $table->string('locality');
            $table->string('description');
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
        Schema::dropIfExists('addresses');
    }
}
