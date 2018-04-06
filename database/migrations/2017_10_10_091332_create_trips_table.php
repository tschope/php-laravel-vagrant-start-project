<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trip_group');
            $table->string('connection_text');
            $table->integer('connection_id');
            $table->string('type_transport');
            $table->string('departure');
            $table->string('from');
            $table->string('to');
            $table->string('gate');
            $table->string('seat');
            $table->string('luggage_transfer');
            $table->integer('order');
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
        Schema::dropIfExists('trips');
    }
}
