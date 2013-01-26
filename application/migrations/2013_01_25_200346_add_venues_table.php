<?php

class Add_Venues_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the venues table
		Schema::create('venues', function($table){
			$table->increments('id');
			$table->integer('team_id')->nullable();
			$table->string('name')->nullable();
			$table->string('address');
			$table->string('latitude')->nullable();
			$table->string('longitude')->nullable();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// Drop the venues table
		Schema::drop('venues');
	}

}