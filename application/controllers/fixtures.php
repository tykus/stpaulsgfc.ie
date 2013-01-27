<?php

class Fixtures_Controller extends Base_Controller {

	public $restful = true;

		
	/* ====================================================
	 * INDEX ACTION - unplayed matches
	 * ==================================================== */
	public function get_index()
	{
		return View::make('fixtures.index')
			->with('page_title', 'Fixtures')
			->with('fixtures', Fixture::where_null('our_goals')
									->order_by('datetime', 'desc')
									->get());
	}
	
	
	/* ====================================================
	 * RESULTS ACTION - played matches
	 * ==================================================== */
	public function get_results()
	{
		return View::make('fixtures.index')
			->with('page_title', 'Match Results')
			->with('fixtures', Fixture::where_not_null('our_goals')
									->order_by('datetime', 'desc')
									->get());
	}

		
	/* ====================================================
	 * EDIT ACTION
	 * ==================================================== */	
	public function get_edit($id)
	{
		// Put the teams into an array for the select control on the form	
		$teams = Team::order_by('name')->get();
		
		return View::make('fixtures.edit')
			->with('page_title', 'Edit Fixture')
			->with('teams', $teams)
			->with('fixture', Fixture::find($id));
	}


	/* ====================================================
	 * UPDATE ACTION
	 * ==================================================== */
	public function put_update()
	{
		$id = Input::get('id');
		$validation = Fixture::validate(Input::all());
		
		if ($validation->fails())
		{
			return Redirect::to_route('edit_fixture', $id)->with_errors($validation);
		}
		else 
		{
			Fixture::update($id, array(
				'name' => Input::get('name'),
				'year' => Input::get('year'),
			));
			
			return Redirect::to_route('fixtures')->with('flash', 'Fixture updated successfully');
		}
	}


	/* ====================================================
	 * NEW ACTION
	 * ==================================================== */	
	 public function get_new()
	 {
		$competitions = array('' => 'Choose a competition') + Competition::lists('name', 'id');							
		
	 	return View::make('fixtures.new')
			->with('page_title', 'New Fixture')
			->with('competitions', $competitions);
	 }


	/* ====================================================
	 * CREATE ACTION
	 * ==================================================== */	
	 public function post_create()
	 {
		// Validate the form data against the rules in the model	
		$validation = Fixture::validate(Input::all());	
			
		if ($validation->fails())
		{
			return Redirect::to_route('new_fixture')->with_errors($validation)->with_input();
		} 
		else
		{ 
			// Process the form
			Fixture::create(array(
				'name' => Input::get('name'),
				'year' => Input::get('year'),
			));
			
			return Redirect::to_route('new_fixture')
				->with('flash', 'New fixture created successfully.');
		}	 
	 
	 }
}
