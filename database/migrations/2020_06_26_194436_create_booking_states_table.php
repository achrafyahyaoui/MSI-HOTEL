<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('booking_states')) {
        Schema::create('booking_states', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('description')->nullable();
            $table->datetime('time_from')->nullable();
            $table->datetime('time_to')->nullable();

            $table->integer('booking_id')->unsigned()->nullable();
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
        });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_states');
    }
}
