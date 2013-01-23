<?php

	class Committees_Controller extends Base_Controller
	{
		
		public $restful = true;
		
		public function get_index()
		{
			return View::make('committees.index')
				->with('page_title', 'Committee Members')
				->with('members', Committee::all());
		}
		
		public function get_new()
		{
			return View::make('committees.new')
				->with('page_title', 'New Committee Member');
		}		
		
		public function post_create()
		{
			// Validate the form data against the rules in the model	
			$validation = Committee::validate(Input::all());	
				
			if ($validation->fails())
			{
				return Redirect::to_route('new_committee')->with_errors($validation)->with_input();
			} 
			else
			{ 
				// Process the form
				Committee::create(array(
					'name' => Input::get('name'),
					'role' => Input::get('role'),
					'telephone' => Input::get('telephone'),
					'email' => Input::get('email')
				));
				
				return Redirect::to_route('committee')
					->with('flash', 'The committee member was edited successfully');
			}
		
		}
		
		
		public function get_edit($id)
		{
			return View::make('committees.edit')
				->with('page_title', 'Edit Committee Member')
				->with('members', Committee::all())
				->with('member', Committee::find($id));
		}

		public function put_update()
		{
			$id = Input::get('id');
			$validation = Committee::validate(Input::all());
			
			if ($validation->fails())
			{
				return Redirect::to_route('edit_committee', $id)->with_errors($validation);
			}
			else 
			{
				Committee::update($id, array(
					'name' => Input::get('name'),
					'role' => Input::get('role'),
					'telephone' => Input::get('telephone'),
					'email' => Input::get('email')				
				));	
				
				return Redirect::to_route('committee')->with('flash', 'Committee Member updated successfully');
			}
		}
		
		public function delete_destroy()
		{
			Committee::find(Input::get('id'))->delete();
			return Redirect::to_route('committee')->with('flash', 'Committee Member was deleted successfully');
		}
		
		
	}
