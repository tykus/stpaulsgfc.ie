<?php

class Add_Users_Data {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Add a user to the users table
		DB::table('users')->insert(array(
			'username' => 'brian@tykus.ie',
			'password' => Hash::make('g1ven2fly'),
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// Delete the user from the users table
		DB::table('users')->delete(1);		
	}

}