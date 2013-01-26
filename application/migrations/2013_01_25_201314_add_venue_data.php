<?php

class Add_Venue_Data {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Add data to the venues table
		DB::table('venues')->insert(array('team_id'=>1, 'name'=>'St. Paul\'s GFC', 'address'=>'Kennedy Road, Dunboyne', 'latitude' => '53.433196','longitude' => '-6.481132'));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}