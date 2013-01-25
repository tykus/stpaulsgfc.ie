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
		DB::table('teams')->insert(array('name' => 'St. Pauls GFC','venue' => 'Clonee','latitude' => '53.43323135','longitude' => '-6.48118019','crest' => 'stpauls.png','website' => 'http://www.stpaulsgfc.ie', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Boardsmill','venue' => 'Boardsmill','latitude' => NULL,'longitude' => NULL,'crest' => 'boardsmill.png','website' => NULL, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Drumree','venue' => 'Drumree','latitude' => '53.50354767','longitude' => '-6.58787394','crest' => 'drumree.png','website' => 'http://community.meath.ie/drumreegaa/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Duleek-Bellewstown','venue' => 'Duleek','latitude' => '53.65401840','longitude' => '-6.43217421','crest' => 'green-gold.png','website' => 'http://duleek-bellewstown.meath.gaa.ie', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Walterstown','venue' => 'Walterstown','latitude' => '53.62541962','longitude' => '-6.60998201','crest' => 'walterstown.png','website' => 'http://walterstown.meath.gaa.ie/index.html', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));		  
		DB::table('teams')->insert(array('name' => 'Blackhall Gaels','venue' => 'Batterstown','latitude' => '53.47370148','longitude' => '-6.54438305','crest' => 'bhg.jpg','website' => 'http://www.blackhallgaels.com', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Clonard','venue' => 'Clonard','latitude' => '53.45135498','longitude' => '-7.02196503','crest' => 'clonard.png','website' => NULL, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Donaghmore/Ashbourne','venue' => 'Ashbourne','latitude' => '53.51050186','longitude' => '-6.41011810','crest' => 'donash.gif','website' => 'http://www.donashgaa.com/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'St. Patricks','venue' => 'Stamullen','latitude' => NULL,'longitude' => NULL,'crest' => 'stpats.png','website' => 'http://www.saintpatricksgaastamullen.com', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Trim','venue' => 'Trim','latitude' => '53.55230713','longitude' => '-6.79952097','crest' => 'trim.jpg','website' => 'http://www.trimgaa.ie/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'St. Peters Dunboyne','venue' => 'Dunboyne','latitude' => '53.41061020','longitude' => '-6.47281790','crest' => 'dunboyne.jpg','website' => ' http://www.dunboynegaa.com/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Dunsany','venue' => 'Dunsany','latitude' => NULL,'longitude' => NULL,'crest' => 'dunsany.jpg','website' => 'http://community.meath.ie/dunsany-gfc', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Kilbride GFC','venue' => 'Kilbride','latitude' => NULL,'longitude' => NULL,'crest' => 'kilbride.png','website' => 'http://www.kilbridegfc.com', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Moynalty','venue' => 'Moynalty','latitude' => NULL,'longitude' => NULL,'crest' => 'moynalty.png','website' => 'http://community.meath.ie/moynaltygfc/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'St. Vincent\'s','venue' => 'Ardcath','latitude' => NULL,'longitude' => NULL,'crest' => 'stvincents.png','website' => '#', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Curraha','venue' => 'Curraha','latitude' => '53.55470276','longitude' => '-6.45345211','crest' => 'curraha.png','website' => 'http://www.currahagaa.com', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Kildalkey','venue' => 'Kildalkey','latitude' => '53.57029724','longitude' => '-6.90476990','crest' => 'kildalkey.png','website' => 'http://kildalkey.meath.gaa.ie/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'null','venue' => NULL,'latitude' => NULL,'longitude' => NULL,'crest' => NULL,'website' => NULL, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Gaeil Colmcille','venue' => 'Kilberry','latitude' => NULL,'longitude' => NULL,'crest' => 'gaeilcolmcille.png','website' => 'http://gaeilcolmcille.meath.gaa.ie/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Senechelstown','venue' => 'Senechelstown','latitude' => '53.68373871','longitude' => '-6.58424711','crest' => 'senechelstown.png','website' => 'http://www.seneschalstowngaa.com/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Kilmainham GFC','venue' => NULL,'latitude' => NULL,'longitude' => NULL,'crest' => 'red-white.png','website' => 'http://community.meath.ie/kilmainhamgfc/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Longwood','venue' => 'Longwood','latitude' => NULL,'longitude' => NULL,'crest' => 'black.png','website' => 'http://www.longwoodclg.com/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Dunderry','venue' => 'Dunderry','latitude' => '53.60706711','longitude' => '-6.77370596','crest' => 'dunderry.png','website' => 'http://community.meath.ie/dunderrygaa/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Syddan','venue' => NULL,'latitude' => NULL,'longitude' => NULL,'crest' => 'syddan.png','website' => 'http://homepage.eircom.net/~syddan/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Ratoath','venue' => 'Sean Eiffe Park','latitude' => '53.51087570','longitude' => '-6.47636223','crest' => 'ratoath.png','website' => 'http://www.ratoathgaa.ie/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Bective','venue' => 'Bective','latitude' => NULL,'longitude' => NULL,'crest' => 'bective.gif','website' => 'http://www.bectivegfc.com/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Simonstown Gaels','venue' => NULL,'latitude' => NULL,'longitude' => NULL,'crest' => 'simonstown.png','website' => 'http://www.simonstowngfc.com/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Wolf Tones','venue' => 'Kilberry','latitude' => '53.69957733','longitude' => '-6.67970991','crest' => 'wolfetones.png','website' => 'http://community.meath.ie/wolfetonesgaa/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Dunshaughlin','venue' => 'Dunshaughlin','latitude' => '53.51587677','longitude' => '-6.55060482','crest' => 'dunshaughlin.png','website' => 'http://www.dunshaughlingaa.com/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'St. Mary\'s','venue' => 'Donore','latitude' => NULL,'longitude' => NULL,'crest' => 'stmarys.png','website' => 'http://www.community.meath.ie/stmarysgfc/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Drumbaragh','venue' => NULL,'latitude' => NULL,'longitude' => NULL,'crest' => 'green-red.png','website' => NULL, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'Cortown','venue' => 'Cortown','latitude' => NULL,'longitude' => NULL,'crest' => 'cortown.png','website' => NULL, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
		DB::table('teams')->insert(array('name' => 'St. Brigid\'s GFC','venue' => 'Ballinacree','latitude' => '53.76499939','longitude' => '-7.23355293','crest' => 'stbrigids.png','website' => 'http://community.meath.ie/stbrigidsgfc/', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// Remove the data from the teams table
	}

}