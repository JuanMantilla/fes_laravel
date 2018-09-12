<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('route_id')->unsigned();
            $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade');
            $table->integer('current_capacity');
            $table->integer('max_capacity');
            $table->integer('min_capacity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
