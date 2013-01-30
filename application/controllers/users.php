<?php

	class Users_Controller extends Base_Controller
	{

		public $restful = true;



	/* ====================================================
	 * EDIT ACTION
	 * ==================================================== */
	public function get_edit($id)
	{
		return View::make('users.edit')
			->with('page_title', 'Change Password')
			->with('user', User::find($id));
	}


	/* ====================================================
	 * UPDATE ACTION
	 * ==================================================== */
	public function put_update()
	{
		$id = Input::get('id');
		$validation = user::validate(Input::all());
		
		if ($validation->fails())
		{
			return Redirect::to_route('edit_user', $id)->with_errors($validation);
		}
		else 
		{
			User::update($id, array(
				'password' => Hash::make(Input::get('password'))
			));
			
			return Redirect::to_route('home')->with('flash', 'User password changed');
		}
	}


	}