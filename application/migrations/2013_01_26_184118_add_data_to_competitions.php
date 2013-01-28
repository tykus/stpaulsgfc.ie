<?php

class Add_Data_To_Competitions {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Add a seed record to the competitions table
		DB::table('competitions')->insert(array('name' => 'Challenge',	'year' => '2012'));
		DB::table('competitions')->insert(array('name' => '\'A\' Football League Division 4',	'year' => '2012'));
		DB::table('competitions')->insert(array('name' => 'Junior \'B\' Football Championship',	'year' => '2012'));
		DB::table('competitions')->insert(array('name' => 'Challenge',	'year' => '2013'));
		DB::table('competitions')->insert(array('name' => '\'A\' Football League Division 4',	'year' => '2013'));
		DB::table('competitions')->insert(array('name' => 'Junior \'B\' Football Championship',	'year' => '2013'));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// Remove the seed data from the table
		DB::table('competitions')->delete();
	}

}