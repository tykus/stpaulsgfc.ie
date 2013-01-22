<?php

	class Pages_Controller extends Base_Controller
	{
		public $restful = true;
		
	    public function get_location()
	    {
	        
	        return View::make('pages.location')->with('page_title', 'Location');
	        
	    }
		
		public function get_contact()
		{
			
			return View::make('pages.contact')->with('page_title', 'Contact');
			
		}
	
	}
