<?php

class Create_Posts_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the posts table
		Schema::create('posts', function($table){
			$table->increments('id');
			$table->integer('user_id');
			$table->string('title');
			$table->text('content');
			$table->date('expires')->nullable();
			$table->boolean('publish');
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
		// Drop the posts table
		Schema::drop('posts');
	}

}