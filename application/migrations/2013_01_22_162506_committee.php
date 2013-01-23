<?php

class Committee {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the committee_members table
		Schema::create('committee_members', function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('role');
			$table->string('telephone');
			$table->string('email');
			$table->integer('user_id');
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
		// Drop the committee_members table
		Schema::drop('committee_members');
	}

}