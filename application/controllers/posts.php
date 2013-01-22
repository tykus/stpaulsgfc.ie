<?php

	class Posts_Controller extends Base_Controller
	{
	
	    public function action_index()
	    {
	        // Just testing!
	        
	        return View::make('posts.index')
				->with('page_title', 'User Posts')
				->with('posts', Post::order_by('created_at', 'desc')->get());
	        
	    }
	
	}