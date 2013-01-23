<?php

class Add_History_Content {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Add existing history to the table
		DB::table('pages')->insert(array(
			'page' => 'history',
			'heading' => 'Flathouse - St. Paul\'s',
			'content' => '<p>St Paul\'s GAA is a Junior Football Club based in the parish of Dunboyne. Up until the emergency (1939-1945), gaelic sport in Dunboyne parish had not been as well organised as it is today. Various smaller clubs had run hurling and football as separate entities and it wasn\'t until the 1940s that clubs began to appear in their current formats. The original Flathouse club was founded in the late 1930s by James Minch, Caulstown and Paddy Leonard, Back Road. The club only lasted five years before being disbanded but in that period they managed to win a Junior Hurling Championship in 1941. Football had not been properly organised in the Dunboyne side of the parish until the late 1940s when the club was reformed as St Peter\'s GAA in 1952 under the patronage of Fr. Carberry C.C. Kilbride GFC had also been reformed in 1948 and organised football for those players living in that side of the parish. Thus, by the 1950s gaelic sport was basically organised by Kilbride GFC and St Peter\'s GAA.</p><p>It was not until the 1960s that there was talk of reforming a club to represent the Flathouse end of the parish. There had been some resentment that players living in this area were not getting a fair chance to play on the St Peter\'s team and in October 1965, a group from that area broke away from St. Peter\'s GAA to reform Flathouse GFC. There was considerable bitterness arising from this break and relations between the clubs were always strained. The decision to break away from St. Peter\'s was vindicated immediately by the success of the new club. Flathouse GFC entered the Junior B Championship in 1966 and went as far as the final before losing to Gael Colmcille by a score of 1-4 to 0-3. In 1968, Flathouse GFC won the Meath Junior Championship, defeating Moylagh GAA by the score of 3-6 to 1-7.  Flathouse also won their league and also secured three tournaments victories in Kildare, Meath and Dublin. Flathouse went on to contest the Intermediate Final in 1970, losing to Dunderry. Flathouse GFC\'s life ended controversially in 1973 when they received a five year ban from the County Board arising from incidents during an Intermediate championship match against Castletown and further disturbances at the County Board meeting to investigate these incidents.</p><p>Despite the huge disruption that this caused, with some players having no option but to join other clubs so that they could play football, in the following year the club was reformed as St. Paul\'s GFC and has been playing as such ever since.</p>',
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
		// Delete the record from the pages table
		DB::table('pages')->where('page', '=', 'history')->delete();
	}

}