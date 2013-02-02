4<?php

class Competitions_Controller extends Base_Controller {

	public $restful = true;
	
	

	/* ====================================================
	 * INDEX ACTION
	 * ==================================================== */	
	public function get_index()
	{
		$competitions = Competition::order_by('year', 'desc')
									->order_by('name')
									->get();
		
		return View::make('competitions.index')
			->with('page_title', 'Competitions')
			->with('competitions', $competitions);  
	}	

	/* ====================================================
	 * SHOW ACTION
	 * ==================================================== */	
	public function get_show($id)
	{
		$competition = Competition::find($id);
		
		return View::make('competitions.show')
			->with('page_title', $competition->name . ' : ' . $competition->year)
			->with('competition', $competition);  
	}
	
	
	
	/* ====================================================
	 * NEW ACTION
	 * ==================================================== */
	public function get_new()
	{
		$years = array(
			date('Y')-2 => date('Y')-2, 
			date('Y')-1 => date('Y')-1, 
			date('Y') => date('Y'), 
			date('Y')+1 => date('Y')+1 
		);
		
		
		return View::make('competitions.new')
			->with('page_title', 'Add New Competition')
			->with('years', $years);
	}


	/* ====================================================
	 * UPDATE ACTION
	 * ==================================================== */
	public function put_update()
	{
		$id = Input::get('id');
		$validation = Competitions::validate(Input::all());
		
		if ($validation->fails())
		{
			return Redirect::to_route('edit_competition', $id)->with_errors($validation);
		}
		else 
		{
			Competition::update($id, array(
				'name' => Input::get('name'),
				'year' => Input::get('year'),
			));
			
			return Redirect::to_route('competitions')->with('flash', 'Competition updated successfully');
		}
	}



	/* ====================================================
	 * EDIT ACTION
	 * ==================================================== */
	public function get_edit($id)
	{
		$years = array(
			date('Y')-2 => date('Y')-2, 
			date('Y')-1 => date('Y')-1, 
			date('Y') => date('Y'), 
			date('Y')+1 => date('Y')+1 
		);		

		return View::make('competitions.edit')
			->with('page_title', 'Edit Competition')
			->with('years', $years)
			->with('competition', Competition::find($id));
	}



	/* ====================================================
	 * CREATE ACTION
	 * ==================================================== */
    public function post_create()
    {
		// Validate the form data against the rules in the model	
		$validation = Competition::validate(Input::all());	
			
		if ($validation->fails())
		{
			return Redirect::to_route('new_competition')->with_errors($validation)->with_input();
		} 
		else
		{ 
			// Process the form
			Competition::create(array(
				'name' => Input::get('name'),
				'year' => Input::get('year'),
			));
			
			return Redirect::to_route('competitions')
				->with('flash', 'New competition created successfully.');
		}
	}

	public function delete_destroy() {
			Competition::find(Input::get('id'))->delete();
			return Redirect::to_route('competitions')->with('flash', 'Competition was deleted successfully');
	}

}
