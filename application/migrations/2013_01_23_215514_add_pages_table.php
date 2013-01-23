<?php

class Add_Pages_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the pages table
		Schema::create('pages', function($table){
			$table->increments('id');
			$table->string('page');
			$table->string('heading');
			$table->text('content');
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
		// Drop the pages table
		Schema::drop('pages');
	}

}