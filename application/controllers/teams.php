<?php

class Teams_Controller extends Base_Controller {
		
	public $restful = true;	


	/* ====================================================
	 * INDEX ACTION
	 * ==================================================== */
	public function get_index()
	{
		return View::make('teams.index')
			->with('page_title', 'Meath GAA Clubs')
			->with('teams', Team::order_by('name')->paginate(5));
	}

	/* ====================================================
	 * NEW ACTION
	 * ==================================================== */
	public function get_new()
	{
		return View::make('teams.new')
			->with('page_title', 'Add New Team');
	}


	/* ====================================================
	 * UPDATE ACTION
	 * ==================================================== */
	public function put_update()
	{
		$id = Input::get('id');
		$validation = Team::validate(Input::all());
		
		if ($validation->fails())
		{
			return Redirect::to_route('edit_team', $id)->with_errors($validation);
		}
		else 
		{
			Team::update($id, array(
				'name' => Input::get('name'),
				'venue' => Input::get('venue'),
				'website' => Input::get('website'),
				'latitude' => Input::get('latitude'),
				'longitude' => Input::get('longitude'),
				'crest' => Input::get('crest')
			));
			
			return Redirect::to_route('teams')->with('flash', 'Team updated successfully');
		}
	}



	/* ====================================================
	 * EDIT ACTION
	 * ==================================================== */
	public function get_edit($id)
	{
		return View::make('teams.edit')
			->with('page_title', 'Edit Team')
			->with('team', Team::find($id));
	}



	/* ====================================================
	 * CREATE ACTION
	 * ==================================================== */
    public function post_create()
    {
		// Validate the form data against the rules in the model	
		$validation = Team::validate(Input::all());	
			
		if ($validation->fails())
		{
			return Redirect::to_route('new_team')->with_errors($validation)->with_input();
		} 
		else
		{ 
			// Process the form
			Team::create(array(
				'name' => Input::get('name'),
				'venue' => Input::get('venue'),
				'website' => Input::get('website'),
				'latitude' => Input::get('latitude'),
				'longitude' => Input::get('longitude'),
				'crest' => Input::get('crest')
			));
			
			return Redirect::to_route('teams')
				->with('flash', 'New team created successfully.');
		}
	}

}
