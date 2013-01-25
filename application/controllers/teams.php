<?php

class Teams_Controller extends Base_Controller {
		
	public $restful = true;	

	public function get_index()
	{
		return View::make('teams.index')
			->with('page_title', 'Teams')
			->with('teams', Team::order_by('name')->get());
	}

	public function get_new()
	{
		// code here..

		return View::make('teams.new');
	}

	public function get_show()
	{
		// code here..

		return View::make('teams.show');
	}


	public function delete_destroy()
	{
		// code here..

		return View::make('teams.destroy');
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

	public function get_edit($id)
	{
		return View::make('teams.edit')
			->with('page_title', 'Edit Team')
			->with('team', Team::find($id));
	}

	public function post_create()
	{
		// code here..

		return View::make('teams.create');
	}

}
