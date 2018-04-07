<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('rules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->date('start_from');
            $table->date('end_at');
            $table->smallInteger('status')->comment('status start from 0 end at 4. 0->1->2->3->4');
            $table->integer('contract_id')->unsigned();
            $table->integer('rule_type')->unsigned();
            $table->foreign('contract_id')->references('id')->on('contracts');
            $table->foreign('rule_type')->references('id')->on('rule_types');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::drop('rules');
        
    }
}
