<?php

	class Venues_Controller extends Base_Controller
	{

		public $restful = true;


		##########################################################################
		#                              INDEX VIEW                                #
		##########################################################################
		public function get_index()
		{
			return View::make('venues.index')
					->with('page_title', 'Venues')
					->with('venues', Venue::paginate(10));
		}



		##########################################################################
		#                               EDIT VIEW                                #
		##########################################################################
		public function get_edit($id)
		{
			$teams = array('' => 'Choose a team') + Team::lists('name', 'id');

			return View::make('venues.edit')
					->with('page_title', 'Edit Venue')
					->with('venue', Venue::find($id))
					->with('teams', $teams);
		}



		##########################################################################
		#                               NEW VIEW                                 #
		##########################################################################
		public function get_new()
		{						
			$teams = array('' => 'Choose a team') + Team::lists('name', 'id');

			return View::make('venues.new')
					->with('page_title', 'New Venue')
					->with('teams', $teams);

		}



		##########################################################################
		#                             UPDATE ACTION                              #
		##########################################################################
		public function put_update()
		{
			$id = Input::get('id');
			$validation = Venue::validate(Input::all());
			
			if ($validation->fails())
			{
				return Redirect::to_route('edit_venue', $id)->with_errors($validation);
			}
			else 
			{
				Venue::update($id, array(
					'name' => Input::get('name'),
					'address' => Input::get('address'),
					'latitude' => Input::get('latitude'),
					'longitude' => Input::get('longitude'),
					'team_id' => Input::get('team_id')
				));
				
				return Redirect::to_route('venues')->with('flash', 'Venue updated successfully');
			}
		}



		##########################################################################
		#                             CREATE ACTION                              #
		##########################################################################
	    public function post_create()
	    {
			// Validate the form data against the rules in the model	
			$validation = Venue::validate(Input::all());	
				
			if ($validation->fails())
			{
				return Redirect::to_route('new_venue')->with_errors($validation)->with_input();
			} 
			else
			{ 
				// Process the form
				Venue::create(array(
					'name' => Input::get('name'),
					'address' => Input::get('address'),
					'latitude' => Input::get('latitude'),
					'longitude' => Input::get('longitude'),
					'team_id' => Input::get('team_id')
				));
				
				return Redirect::to_route('venues')
					->with('flash', 'New venue created successfully.');
			}
		}

	}