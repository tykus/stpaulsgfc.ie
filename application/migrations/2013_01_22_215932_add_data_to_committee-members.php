<?php

class Add_Data_To_Committee_Members {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Add data to committee-members
		DB::table('committee_members')->insert(array(
			'name' => 'Brian O\'Sullivan',
			'role' => 'Chairman',
			'telephone' => '087-1234567',
			'email' => 'brian@tykus.ie'
		));
		DB::table('committee_members')->insert(array(
			'name' => 'Anthony Barker',
			'role' => 'PRO',
			'telephone' => '087-1234567',
			'email' => 'bpro@stpaulsgfc.ie'
		));		
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// Remove data from committee_members
		DB::table('committee_members')->where('id', '<', 3)->delete();	
	}

}