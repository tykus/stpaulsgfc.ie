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
		
		public function get_gallery()
		{
			
			return View::make('pages.gallery')->with('page_title', 'Gallery')
				->with('photos', array(
					'img/gallery/13.jpg',
					'img/gallery/8.jpg',
					'img/gallery/34.jpg',
					'img/gallery/68.jpg',
					'img/gallery/50.jpg',
					'img/gallery/51.jpg',
					'img/gallery/65.jpg',
					'img/gallery/66.jpg',
					'img/gallery/100.jpg'
				));
			
		}
	
	}
