<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePriceList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('price_list', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('duration');
            $table->integer('price');
            $table->integer('ad_code')->unsigned();
            $table->foreign('ad_code')->references('ad_code')->on('time_slots');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::drop('price_list');
        
    }
}
