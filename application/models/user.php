<?php
	
	class User extends Eloquent
	{
	    public function posts()
	    {
	        return $this->has_many('Post');
	    }


		// Validation Rules
		public static $rules = array(
			'password' => 'required|min:6'
		);
		
		// Data validation method
		public static function validate($data)
		{
			return Validator::make($data, static::$rules);
		}

	}