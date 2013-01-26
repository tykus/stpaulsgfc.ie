<?php

class Add_Fixtures_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the fixtures table
		Schema::create('fixtures', function($table){
			$table->increments('id');
			$table->integer('competition_id');
			$table->integer('team_id');
			$table->integer('venue_id')->nullable();
			$table->date('datetime')->nullable();
			$table->string('comment')->nullable();
			$table->integer('our_goals')->nullable();
			$table->integer('our_points')->nullable();
			$table->integer('opp_goals')->nullable();
			$table->integer('opp_points')->nullable();
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
		// Drop the fixtures table
		Schema::drop('fixtures');
	}

}