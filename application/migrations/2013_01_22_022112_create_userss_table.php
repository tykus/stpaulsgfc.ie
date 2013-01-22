<?php

class Create_Userss_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the users table
		Schema::create('users', function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('email');
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
		// Drop the users table
		Schema::drop('users');
	}

}