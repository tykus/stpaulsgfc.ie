<?php

class Competition extends Eloquent {
	
	    public function fixtures()
    	{
        	return $this->has_many('Fixture');
    	}
		
		
		// Validation Rules
		public static $rules = array(
			//'name' => 'required|min:2|unique:teams,name'
			'name' => 'required',
			'year' => 'required'
		);
		
		// Data validation method
		public static function validate($data)
		{
			return Validator::make($data, static::$rules);
		}
		

}
