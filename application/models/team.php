<?php

class Team extends Eloquent {
			
		// Association - has_many Venues
		public function venues()
		{
			return $this->has_many('Venue');
		}	
					
		
		public function get_teamId()
		{
		    return $this->get_attribute('id');
		}
				
		// Validation Rules
		public static $rules = array(
			//'name' => 'required|min:2|unique:teams,name'
			'name' => 'required|min:2'
		);
		
		// Data validation method
		public static function validate($data)
		{
			return Validator::make($data, static::$rules);
		}
		
}
