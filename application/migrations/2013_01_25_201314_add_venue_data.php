<?php

class Add_Venue_Data {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// Add data to the venues table
		DB::table('venues')->insert(array('team_id' => '1','name' => NULL,'address' => 'Pace','latitude' => '53.43323135','longitude' => '-6.48118019'));
		DB::table('venues')->insert(array('team_id' => '2','name' => 'Pairc Cill Mhuire','address' => 'Boardsmill','latitude' => '53.525449','longitude' => '-6.870404'));
		DB::table('venues')->insert(array('team_id' => '3','name' => NULL,'address' => 'Drumree','latitude' => '53.50354767','longitude' => '-6.58787394'));
		DB::table('venues')->insert(array('team_id' => '4','name' => NULL,'address' => 'Duleek','latitude' => '53.65401840','longitude' => '-6.43217421'));
		DB::table('venues')->insert(array('team_id' => '5','name' => NULL,'address' => 'Walterstown','latitude' => '53.62541962','longitude' => '-6.60998201'));
		DB::table('venues')->insert(array('team_id' => '6','name' => NULL,'address' => 'Batterstown','latitude' => '53.47370148','longitude' => '-6.54438305'));
		DB::table('venues')->insert(array('team_id' => '7','name' => NULL,'address' => 'Clonard','latitude' => '53.45135498','longitude' => '-7.02196503'));
		DB::table('venues')->insert(array('team_id' => '8','name' => NULL,'address' => 'Ashbourne','latitude' => '53.51050186','longitude' => '-6.41011810'));
		DB::table('venues')->insert(array('team_id' => '9','name' => NULL,'address' => 'Stamullen','latitude' => '53.633446','longitude' => '-6.256779'));
		DB::table('venues')->insert(array('team_id' => '10','name' => NULL,'address' => 'Trim','latitude' => '53.55230713','longitude' => '-6.79952097'));
		DB::table('venues')->insert(array('team_id' => '11','name' => NULL,'address' => 'Dunboyne','latitude' => '53.41061020','longitude' => '-6.47281790'));
		DB::table('venues')->insert(array('team_id' => '12','name' => 'Pairc na nGael','address' => 'Dunsany','latitude' => '53.544802','longitude' => '-6.617343'));
		DB::table('venues')->insert(array('team_id' => '13','name' => NULL,'address' => 'Kilbride','latitude' => '53.45402','longitude' => '-6.395755'));
		DB::table('venues')->insert(array('team_id' => '14','name' => NULL,'address' => 'Moynalty','latitude' => '53.781241','longitude' => '-6.873778'));
		DB::table('venues')->insert(array('team_id' => '15','name' => 'Masterson Park','address' => 'Ardcath','latitude' => '53.603096','longitude' => '-6.383626'));
		DB::table('venues')->insert(array('team_id' => '16','name' => NULL,'address' => 'Curraha','latitude' => '53.55470276','longitude' => '-6.45345211'));
		DB::table('venues')->insert(array('team_id' => '17','name' => NULL,'address' => 'Kildalkey','latitude' => '53.57029724','longitude' => '-6.90476990'));
		DB::table('venues')->insert(array('team_id' => '18','name' => NULL,'address' => 'Ballinabrackey','latitude' => '53.397267','longitude' => '-7.108825'));
		DB::table('venues')->insert(array('team_id' => '19','name' => NULL,'address' => 'Kells','latitude' => '53.720787','longitude' => '-6.879459'));
		DB::table('venues')->insert(array('team_id' => '20','name' => NULL,'address' => 'Senechelstown','latitude' => '53.68373871','longitude' => '-6.58424711'));
		DB::table('venues')->insert(array('team_id' => '21','name' => NULL,'address' => '','latitude' => '53.713325','longitude' => '-6.824401'));
		DB::table('venues')->insert(array('team_id' => '22','name' => NULL,'address' => 'Longwood','latitude' => '53.454959','longitude' => '-6.934514'));
		DB::table('venues')->insert(array('team_id' => '23','name' => NULL,'address' => 'Dunderry','latitude' => '53.60706711','longitude' => '-6.77370596'));
		DB::table('venues')->insert(array('team_id' => '24','name' => 'Park Ludlow','address' => 'Syddan','latitude' => '53.796038','longitude' => '-6.635518'));
		DB::table('venues')->insert(array('team_id' => '25','name' => 'Sean Eiffe Park','address' => 'Ratoath','latitude' => '53.51087570','longitude' => '-6.47636223'));
		DB::table('venues')->insert(array('team_id' => '26','name' => NULL,'address' => 'Bective','latitude' => '53.614169','longitude' => '-6.672318'));
		DB::table('venues')->insert(array('team_id' => '27','name' => NULL,'address' => 'Simonstown','latitude' => '53.67246','longitude' => '-6.6808'));
		DB::table('venues')->insert(array('team_id' => '28','name' => NULL,'address' => 'Kilberry','latitude' => '53.69957733','longitude' => '-6.67970991'));
		DB::table('venues')->insert(array('team_id' => '29','name' => NULL,'address' => 'Dunshaughlin','latitude' => '53.51587677','longitude' => '-6.55060482'));
		DB::table('venues')->insert(array('team_id' => '30','name' => NULL,'address' => 'Donore','latitude' => '53.69441','longitude' => '-6.445762'));
		DB::table('venues')->insert(array('team_id' => '31','name' => NULL,'address' => 'Drumbaragh','latitude' => '53.726349','longitude' => '-6.93747'));
		DB::table('venues')->insert(array('team_id' => '32','name' => 'Pairc Naomh Baoithin','address' => 'Cortown','latitude' => '53.685347','longitude' => '-6.851265'));
		DB::table('venues')->insert(array('team_id' => '33','name' => NULL,'address' => 'Ballinacree','latitude' => '53.76499939','longitude' => '-7.23355293'));
		DB::table('venues')->insert(array('team_id' => '34','name' => NULL,'address' => 'Meath Hill','latitude' => '53.886861','longitude' => '-6.712583'));
		DB::table('venues')->insert(array('team_id' => '35','name' => NULL,'address' => 'Moylagh','latitude' => '53.719679','longitude' => '-7.146071'));
		DB::table('venues')->insert(array('team_id' => '36','name' => NULL,'address' => 'Slane','latitude' => '53.719098','longitude' => '-6.477654'));
		DB::table('venues')->insert(array('team_id' => '37','name' => NULL,'address' => 'Oldcastle','latitude' => '','longitude' => ''));
		DB::table('venues')->insert(array('team_id' => '38','name' => NULL,'address' => 'Ballivor','latitude' => '','longitude' => ''));
		DB::table('venues')->insert(array('team_id' => '39','name' => 'Pairc Donall O\'Floinn','address' => 'Baconstown','latitude' => '53.448717','longitude' => '-6.809775'));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// Delete all seeds from the venues table
		DB::table('venues')->delete();
	}

}