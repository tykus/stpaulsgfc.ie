<?php

class Add_Postss_Data {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Add a post to the posts table
		DB::table('posts')->insert(array(
			'title' => 'First post!',
			'content' => 'This is a first post which has been seeded through a migration',
			'user_id' => 1,
			'expires' => "2013-01-31 00:00:00",
			'publish' => true,
			'created_at' => date('Y-m-s H:i:s'),
			'updated_at' => date('Y-m-s H:i:s')
			
		));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// Delete the post from the table
		DB::table('posts')->delete(1);
	}

}