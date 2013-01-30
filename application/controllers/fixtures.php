<?php

class Fixtures_Controller extends Base_Controller {

	public $restful = true;

		
	/* ====================================================
	 * INDEX ACTION - admin view
	 * ==================================================== */
	public function get_index()
	{
		return View::make('fixtures.index')
			->with('page_title', 'Fixtures')
			->with('fixtures', Fixture::order_by('datetime', 'desc')
									->get());
	}


	/* ====================================================
	 * FIXTURES ACTION - unplayed matches
	 * ==================================================== */
	public function get_fixtures()
	{
		return View::make('fixtures.fixtures')
			->with('page_title', 'Fixtures')
			->with('fixtures', Fixture::where_null('our_points')
									->order_by('datetime', 'desc')
									->get());
	}
	
	
	/* ====================================================
	 * RESULTS ACTION - played matches
	 * ==================================================== */
	public function get_results()
	{
		return View::make('fixtures.results')
			->with('page_title', 'Match Results')
			->with('fixtures', Fixture::where_not_null('our_points')
									->order_by('datetime', 'desc')
									->get());
	}

		
	/* ====================================================
	 * EDIT ACTION
	 * ==================================================== */	
	public function get_edit($id)
	{
		// Options for the select controls
		$competitions = array('' => 'Choose a competition') + Competition::lists('name', 'id');							
		$venues = array('' => 'Choose a venue') + Venue::lists('address', 'id');						
		$opponents = array('' => 'Choose a opponent') + Team::lists('name', 'id');
		
		return View::make('fixtures.edit')
			->with('page_title', 'Edit Fixture')
			->with('venues', $venues)
			->with('opponents', $opponents)
			->with('competitions', $competitions)
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
				'competition_id' => Input::get('competition_id'),
				'team_id' => Input::get('team_id'),
				'venue_id' => Input::get('venue_id'),
				'datetime' => Input::get('datetime'),
			));
			
			return Redirect::to_route('fixture_list')->with('flash', 'Fixture updated successfully');
		}
	}


	/* ====================================================
	 * NEW ACTION
	 * ==================================================== */	
	 public function get_new()
	 {
		$competitions = array('' => 'Choose a competition') + Competition::lists('name', 'id');							
		$venues = array('' => 'Choose a venue') + Venue::lists('address', 'id');						
		$opponents = array('' => 'Choose a opponent') + Team::lists('name', 'id');
		
		
	 	return View::make('fixtures.new')
			->with('page_title', 'New Fixture')
			->with('venues', $venues)
			->with('opponents', $opponents)
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
				'competition_id' => Input::get('competition_id'),
				'team_id' => Input::get('team_id'),
				'venue_id' => Input::get('venue_id'),
				'datetime' => Input::get('datetime'),
			));
			
			return Redirect::to_route('fixture_list')->with('flash', 'New fixture created successfully.');
		}	 
	 
	 }




	/* ====================================================
	 * DELETE ACTION
	 * ==================================================== */	
	 public function delete_destroy() 
	 {
			Fixture::find(Input::get('id'))->delete();
			return Redirect::to_route('fixture_list')->with('flash', 'Fixture was deleted successfully');
	 }
}
