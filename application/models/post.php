<?php

	class Post extends Eloquent {

		// Use table name posts - in line with convention
				
		
	    public function user()
    	{
        	return $this->belongs_to('User');
    	}
		
		
		// Returns an order list of posts sorted in reverse order by create date and paginated	
		public static function paged_posts($per_page)
		{
			
			return Post::with('user')
					->where('publish', '=', true)
					->order_by('created_at', 'desc')
					->paginate($per_page);
		}
		
		// Validation Rules
		public static $rules = array(
			'title' => 'required|min:2',
			'content' => 'required'
		);
		
		// Data validation method
		public static function validate($data)
		{
			return Validator::make($data, static::$rules);
		}
		
	}
