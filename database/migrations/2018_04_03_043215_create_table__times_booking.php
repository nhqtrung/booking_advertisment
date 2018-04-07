<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTimesBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('time_booking', function (Blueprint $table) {
            $table->increments('id');
            $table->string('priority')->nullable();
            $table->integer('product_booking_id')->unsigned();
            $table->integer('price_list_id')->unsigned();
            $table->foreign('product_booking_id')->references('id')->on('products_booking');
            $table->foreign('price_list_id')->references('id')->on('price_list');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::drop('time_booking');
        
    }
}
