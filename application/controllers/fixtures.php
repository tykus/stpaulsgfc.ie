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
			->with('fixtures', Fixture::order_by('date', 'desc')
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
								->order_by('date')
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
									->order_by('date', 'desc')
									->get());
	}

		
	/* ====================================================
	 * EDIT ACTION
	 * ==================================================== */	
	public function get_edit($id)
	{
		// Options for the select controls
		$competitions = Competition::order_by('year', 'desc')
							->order_by('name')
							->get();
		$venues = Venue::order_by('address')
					->get();					
		$opponents = Team::where('id', '!=', 1)
						->order_by('name')->get();

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
				'date' => Input::get('date'),
				'time' => Input::get('time'),
				'our_goals' => Input::get('our_goals'),
				'our_points' => Input::get('our_points'),
				'opp_goals' => Input::get('opp_goals'),
				'opp_points' => Input::get('opp_points'),
			));
			
			return Redirect::to_route('fixture_list')->with('flash', 'Fixture updated successfully');
		}
	}


	/* ====================================================
	 * NEW ACTION
	 * ==================================================== */	
	 public function get_new()
	 {
		// Options for the select controls
		$competitions = Competition::order_by('year', 'desc')
							->order_by('name')
							->get();
		$venues = Venue::order_by('address')
					->get();					
		$opponents = Team::where('id', '!=', 1)
						->order_by('name')->get();
		
		
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
				'date' => Input::get('date'),
				'time' => Input::get('time'),
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
