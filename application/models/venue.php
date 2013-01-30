<?php

class Venue extends Eloquent
{
		// Association - belongs_to Team
	    public function team()
    	{
        	return $this->belongs_to('Team');
    	}	

    	// Validation Rules
		public static $rules = array(
			//'name' => 'required|min:2|unique:teams,name'
			'address' => 'required|min:2'
		);
		
		// Data validation method
		public static function validate($data)
		{
			return Validator::make($data, static::$rules);
		}
	
}
