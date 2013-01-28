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
			'title' => 'Moyles transfer rubber-stamped',
			'content' => 'It has been confirmed that former Meath star Anthony Moyles will line out for his home club St Paul\'s in this year\'s Meath JFC B competition.
							Moyles\' transfer from Dublin outfit Oliver Plunketts Eoghan Ruadh to St Paul\'s has been sanctioned by the Leinster Council.
							His brother Sean and former Meath selector Tom Keague will be in charge of the Clonee outfit in 2013.
							Moyles started his football career with St Paul\'s and lined out at full-forward when they captured the Meath JFC title back in 1999 before transferring to Blackhall Gaels in 2002.
							He was a key figure in the Kilcloon/Batterstown amalgamation\'s Keegan Cup success of 2003. He switched his club allegiance to Oliver Plunkett\'s three years ago.
							St Paul\'s playing personnel has already been boosted by several transfers into the club this year including 1996 All-Ireland winning goalkeeper Conor Martin as well as his understudy that year, Ronan Finnegan from Kilmainhamwood.
							1992 All-Ireland minor medalist Paul Nestor has transferred from Blackhall Gaels.',
			'user_id' => 1,
			'expires' => "2014-01-31 00:00:00",
			'publish' => true,
			'created_at' => date('Y-m-d m:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
			
		));
		DB::table('posts')->insert(array(
			'title' => 'All-Ireland winning \'keeper transfers to Paul\'s',
			'content' => '1996 All-Ireland winning Meath goalkeeper Conor Martin is to revive his footballing career with St Paul\'s this year.
							Martin\'s transfer from Ballivor to St Paul\'s has been sanctioned by the County\'s CCC.
							Anthony Moyles is also understood to be on the move back to his home club who will be making a big push for Junior B honours this year under the joint-management of Tom Keague and Sean Moyles.
							Interestingly, Ronan Finnegan - who was Meath\'s substitute goalkeeper in 1996 - is also transferring to the Clonee outfit from Kilmainhamwood.
							Finnegan was between the posts when the \'Wood claimed the Keegan Cup in 1996.',
			'user_id' => 1,
			'expires' => "2014-01-31 00:00:00",
			'publish' => true,
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
		// Delete the post from the table
		DB::table('posts')->delete();
	}

}