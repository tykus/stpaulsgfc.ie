<?php

	class Posts_Controller extends Base_Controller
	{
		
		public $restful = true;
		
		/* ====================================================
		 * INDEX ACTION
		 * ==================================================== */
	    public function get_index()
	    {
	        return View::make('posts.index')
				->with('page_title', 'All Posts')
				->with('posts', Post::order_by('created_at', 'desc')->get());	        
	    }

		/* ====================================================
		 * SHOW ACTION
		 * ==================================================== */
	    public function get_show($id)
	    {
	    	// Shows a specific record
			return View::make('posts.show')
				->with('page_title', 'Showing Post')
				->with('post', Post::find($id));	        
	    }

		/* ====================================================
		 * EDIT ACTION
		 * ==================================================== */
		public function get_edit($id)
		{
			return View::make('posts.edit')
				->with('page_title', 'Edit Post')
				->with('post', Post::find($id));
		}


		/* ====================================================
		 * UPDATE ACTION
		 * ==================================================== */
		public function put_update()
		{
			$id = Input::get('id');
			$validation = Post::validate(Input::all());
			
			if ($validation->fails())
			{
				return Redirect::to_route('edit_post', $id)->with_errors($validation);
			}
			else 
			{
				Post::update($id, array(
					'title' => Input::get('title'),
					'content' => Input::get('content'),
					'user_id' => Input::get('user_id'),
					'publish' => Input::get('publish'),
				));
				
				return Redirect::to_route('posts')->with('flash', 'Post updated successfully');
			}
		}
		
		/* ====================================================
		 * NEW ACTION
		 * ==================================================== */
	    public function get_new()
	    {
 			// Renders form
 			return View::make('posts.new')
				->with('page_title', 'New Post');
 			
	    }	
		
		/* ====================================================
		 * CREATE ACTION
		 * ==================================================== */
	    public function post_create()
	    {
			// Validate the form data against the rules in the model	
			$validation = Post::validate(Input::all());	
				
			if ($validation->fails())
			{
				return Redirect::to_route('new_post')->with_errors($validation)->with_input();
			} 
			else
			{ 
				// Process the form
				Post::create(array(
					'title' => Input::get('title'),
					'content' => Input::get('content'),
					'user_id' => Input::get('user_id'),
					'publish' => Input::get('publish'),
				));
				
				return Redirect::to_route('posts')
					->with('flash', 'Your post created successfully.');
			}
		}
		
		/* ====================================================
		 * DELETE ACTION
		 * ==================================================== */		
		public function delete_destroy()
		{
			Post::find(Input::get('id'))->delete();
			return Redirect::to_route('posts')->with('flash', 'Post was deleted successfully');
		}
 			
 			
 			
	    		

	}