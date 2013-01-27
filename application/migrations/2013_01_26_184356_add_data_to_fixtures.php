<?php

class Add_Data_To_Fixtures {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Add seed data to the fixtures table
		DB::table('fixtures')->insert(array('team_id' => 20, 'competition_id' => 1, 'datetime' => '2012-08-12'));
		DB::table('fixtures')->insert(array('team_id' => 2, 'competition_id' => 1, 'datetime' => '2012-08-12'));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// Remove seed data from the fixtures table
		DB::table('fixtures')->delete();
		
	}

}