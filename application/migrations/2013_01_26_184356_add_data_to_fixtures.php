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
		DB::table('fixtures')->insert(array('team_id' => 15, 'venue_id' => 15, 'competition_id' => 2, 'datetime' => '2012-02-05 14:00:00', 'our_goals' => 0, 'our_points' => 7, 'opp_goals' => 1, 'opp_points' => 12));
		DB::table('fixtures')->insert(array('team_id' =>  7, 'venue_id' =>  1, 'competition_id' => 2, 'datetime' => '2012-02-12 11:00:00', 'our_goals' => 0, 'our_points' => 4, 'opp_goals' => 1, 'opp_points' => 12));
		DB::table('fixtures')->insert(array('team_id' =>  2, 'venue_id' =>  1, 'competition_id' => 2, 'datetime' => '2012-02-19 14:30:00', 'our_goals' => 1, 'our_points' => 9, 'opp_goals' => 2, 'opp_points' => 4));
		DB::table('fixtures')->insert(array('team_id' => 14, 'venue_id' => 14, 'competition_id' => 2, 'datetime' => '2012-02-26 14:30:00', 'our_goals' => 2, 'our_points' => 5, 'opp_goals' => 0, 'opp_points' => 13));
		DB::table('fixtures')->insert(array('team_id' => 33, 'venue_id' =>  1, 'competition_id' => 2, 'datetime' => '2012-03-16 20:00:00', 'our_goals' => 2, 'our_points' => 10, 'opp_goals' => 2, 'opp_points' => 12));
		DB::table('fixtures')->insert(array('team_id' => 12, 'venue_id' => 12, 'competition_id' => 2, 'datetime' => '2012-05-06 11:30:00', 'our_goals' => 1, 'our_points' => 7, 'opp_goals' => 2, 'opp_points' => 14));
		DB::table('fixtures')->insert(array('team_id' => 32, 'venue_id' =>  1, 'competition_id' => 2, 'datetime' => '2012-05-12 19:00:00', 'our_goals' => 1, 'our_points' => 7, 'opp_goals' => 4, 'opp_points' => 13));
		DB::table('fixtures')->insert(array('team_id' => 13, 'venue_id' => 13, 'competition_id' => 2, 'datetime' => '2012-06-20 20:00:00', 'our_goals' => 2, 'our_points' => 4, 'opp_goals' => 3, 'opp_points' => 22));
		DB::table('fixtures')->insert(array('team_id' => 34, 'venue_id' =>  1, 'competition_id' => 2, 'datetime' => '2012-05-26 19:00:00', 'our_goals' => 0, 'our_points' => 12, 'opp_goals' => 3, 'opp_points' => 11));
		DB::table('fixtures')->insert(array('team_id' => 16, 'venue_id' => 16, 'competition_id' => 2, 'datetime' => '2012-06-06 20:00:00', 'our_goals' => 0, 'our_points' => 5, 'opp_goals' => 0, 'opp_points' => 10));
		DB::table('fixtures')->insert(array('team_id' => 22, 'venue_id' =>  1, 'competition_id' => 2, 'datetime' => '2012-07-31 19:30:00', 'our_goals' => 0, 'our_points' => 0, 'opp_goals' => 0, 'opp_points' => 0));
		DB::table('fixtures')->insert(array('team_id' => 30, 'venue_id' => 30, 'competition_id' => 2, 'datetime' => '2012-08-20 19:00:00', 'our_goals' => 0, 'our_points' => 0, 'opp_goals' => 0, 'opp_points' => 0));
		DB::table('fixtures')->insert(array('team_id' => 33, 'venue_id' => 1, 'competition_id' => 5,  'datetime' => '2013-02-13'));		
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