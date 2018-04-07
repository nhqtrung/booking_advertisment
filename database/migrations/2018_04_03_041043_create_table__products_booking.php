<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductsBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('products_booking', function (Blueprint $table) {
            $table->increments('id');
            $table->string('videotape');
            $table->integer('duration');
            $table->date('start_from');
            $table->date('end_at');
            $table->string('description')->nullable();
            $table->integer('rule_id')->unsigned();
            $table->integer('staff_management')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->foreign('rule_id')->references('id')->on('rules');
            $table->foreign('staff_management')->references('id')->on('users');
            $table->foreign('product_id')->references('id')->on('products');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::drop('products_booking');
        
    }
}
