<?php
	
	class Committee extends Eloquent 
	{
		
		// Using non-conventional database table name (compared with model name) 	
		public static $table = 'committee_members';
		
		
		// Validation Rules
		public static $rules = array(
			'name' => 'required|min:2',
			'role' => 'required'
		);
		
		// Data validation method
		public static function validate($data)
		{
			return Validator::make($data, static::$rules);
		}
	}
