<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDateBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('date_booking', function (Blueprint $table) {
            $table->integer('time_booking_id')->unsigned();
            $table->date('date');
            $table->foreign('time_booking_id')->references('id')->on('time_booking');
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
