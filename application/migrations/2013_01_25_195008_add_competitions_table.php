<?php

class Add_Competitions_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the competitions table
		Schema::create('competitions', function($table){
			$table->increments('id');
			$table->string('name');
			$table->integer('year');
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// Drop the competitions table
		Schema::drop('competitions');
	}

}