<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
 		Schema::create('routes', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->dateTime('time_start');
			$table->dateTime('time_stop');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop('routes');
    }
}
