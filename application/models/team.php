<?php

class Team extends Eloquent {
	
		// Validation Rules
		public static $rules = array(
			'name' => 'required|min:2'
		);
		
		// Data validation method
		public static function validate($data)
		{
			return Validator::make($data, static::$rules);
		}
		
}
