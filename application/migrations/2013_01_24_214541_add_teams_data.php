<?php

class Add_Teams_Data {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Add data to the teams table
		  DB::table('teams')->insert(array('name' => 'St. Paul\'s GFC','crest' => 'stpauls.png','website' => 'http://www.stpaulsgfc.ie', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Boardsmill','crest' => 'boardsmill.png','website' => 'http://boardsmill.gaa.ie/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Drumree','crest' => 'drumree.png','website' => 'http://community.meath.ie/drumreegaa/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Duleek-Bellewstown','crest' => 'green-gold.png','website' => 'http://duleek-bellewstown.meath.gaa.ie', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Walterstown','crest' => 'walterstown.png','website' => 'http://www.walterstown.gaa.ie/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Blackhall Gaels','crest' => 'bhg.jpg','website' => 'http://www.blackhallgaels.com', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Clonard','crest' => 'clonard.png','website' => NULL, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Donaghmore/Ashbourne','crest' => 'donash.gif','website' => 'http://www.donashgaa.com/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'St. Patrick\'s','crest' => 'stpats.png','website' => 'http://www.saintpatricksgaastamullen.com', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Trim','crest' => 'trim.jpg','website' => 'http://www.trimgaa.ie/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'St. Peter\'s','crest' => 'dunboyne.jpg','website' => ' http://www.dunboynegaa.com/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Dunsany','crest' => 'dunsany.jpg','website' => 'http://community.meath.ie/dunsany-gfc', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Kilbride GFC','crest' => 'kilbride.png','website' => 'http://www.kilbridegfc.com', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Moynalty','crest' => 'moynalty.png','website' => 'http://community.meath.ie/moynaltygfc/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'St. Vincent\'s','crest' => 'stvincents.png','website' => NULL, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Curraha','crest' => 'curraha.png','website' => 'http://www.currahagaa.com', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Kildalkey','crest' => 'kildalkey.png','website' => 'http://kildalkey.meath.gaa.ie/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Ballinabrackey','crest' => 'ballinabrackey.png','website' => NULL, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Gaeil Colmcille','crest' => 'gaeilcolmcille.png','website' => 'http://gaeilcolmcille.meath.gaa.ie/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Senechelstown','crest' => 'senechelstown.png','website' => 'http://www.seneschalstowngaa.com/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Kilmainham GFC','crest' => 'red-white.png','website' => NULL, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Longwood','crest' => 'longwood.png','website' => 'http://www.longwoodclg.com/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Dunderry','crest' => 'dunderry.png','website' => 'http://community.meath.ie/dunderrygaa/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Syddan','crest' => 'syddan.png','website' => 'http://homepage.eircom.net/~syddan/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Ratoath','crest' => 'ratoath.png','website' => 'http://www.ratoathgaa.ie/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Bective','crest' => 'bective.gif','website' => 'http://www.bectivegfc.com/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Simonstown Gaels','crest' => 'simonstown.png','website' => 'http://www.simonstowngfc.com/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Wolf Tones','crest' => 'wolfetones.png','website' => 'http://community.meath.ie/wolfetonesgaa/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Dunshaughlin','crest' => 'dunshaughlin.png','website' => 'http://www.dunshaughlingaa.com/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'St. Mary\'s','crest' => 'stmarys.png','website' => 'http://www.community.meath.ie/stmarysgfc/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Drumbaragh','crest' => 'drumbaragh.png','website' => NULL, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Cortown','crest' => 'cortown.png','website' => NULL, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'St. Brigid\'s GFC','crest' => 'stbrigids.png','website' => 'http://community.meath.ie/stbrigidsgfc/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Meath Hill','crest' => 'meath_hill.png','website' => 'http://www.meathhillgfc.com/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Moylagh','crest' => 'moylagh.png','website' => 'http://www.moylaghgaa.com/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Slane','crest' => 'slane.png','website' => 'http://www.slanegfc.com/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Oldcastle','crest' => 'oldcastle.png','website' => NULL, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Ballivor','crest' => 'ballivor.png','website' => NULL, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		  DB::table('teams')->insert(array('name' => 'Na Fianna','crest' => 'nafianna.png','website' => NULL, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));

}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// Remove the data from the teams table
		DB::table('teams')->delete();
	}

}