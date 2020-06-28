<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('room_states')) {
        Schema::create('room_states', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('description')->nullable();
            $table->datetime('time_from')->nullable();
            $table->datetime('time_to')->nullable();

            $table->integer('room_id')->unsigned()->nullable();
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
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
        Schema::dropIfExists('room_states');
    }
}
