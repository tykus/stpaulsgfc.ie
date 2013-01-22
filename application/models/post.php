<?php

	class Post extends Eloquent {
		// All of the Eloquent static methods become available
		// Note that this form assumes a table called 'posts' 
		// exists in the database.
		
		
	    public function user()
    	{
        	return $this->belongs_to('User');
    	}
		
	}
