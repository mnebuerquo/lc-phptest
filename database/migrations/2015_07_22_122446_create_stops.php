<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStops extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('stops', function($table) {
			$table->increments('id');
			$table->integer('route_id');
			$table->integer('seq_number');
			$table->integer('location_id');
			$table->boolean('action');//pickup=true,delivery=false
			$table->dateTime('time_arrival');
			$table->dateTime('time_departure');

		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop('stops');
    }
}
