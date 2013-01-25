<?php

class Team extends Eloquent {
		
		public function get_teamId()
		{
		    return $this->get_attribute('id');
		}
				
		// Validation Rules
		public static $rules = array(
			//'name' => 'required|min:2|unique:teams,name'
			'name' => 'required|min:2|unique:teams,name'
		);
		
		// Data validation method
		public static function validate($data)
		{
			return Validator::make($data, static::$rules);
		}
		
}
