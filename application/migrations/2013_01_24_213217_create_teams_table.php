<?php

class Create_Teams_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the teams table
		Schema::create('teams', function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('crest')->default('black.png')->nullable();
			$table->string('website')->nullable();
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
		// Drop the teams table
		Schema::drop('teams');
	}

}