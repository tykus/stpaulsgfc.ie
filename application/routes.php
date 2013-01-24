<?php

/* ================================================================================================
 *   APPLICATION ROOT
 * ================================================================================================ */
Route::get('/', 'pages@home');


/* ================================================================================================
 *   PAGES
 * ================================================================================================ */
Route::get('home', array('as' => 'home', 'uses' => 'pages@home'));
Route::get('history', array('as' => 'history', 'uses' =>  'pages@history'));
Route::get('location', array('as' => 'location', 'uses' => 'pages@location'));
Route::get('contact', array('as' => 'contact', 'uses' => 'pages@contact'));
Route::get('gallery', 'pages@gallery');


/* ================================================================================================
 *   POSTS
 * ================================================================================================ */
Route::get('posts', array('as'=>'posts', 'uses'=>'posts@index'));
Route::get('posts/(:any)', array('as'=>'show_post', 'uses'=>'posts@show'));
Route::get('posts/new', array('as' => 'new_post', 'uses' => 'posts@new'));
Route::post('posts/create', array('before' => 'csrf', 'uses' => 'posts@create'));
Route::get('posts/(:any)/edit', array('as' => 'edit_post', 'uses' => 'posts@edit'));
Route::put('posts/update', array('before' => 'csrf', 'uses' => 'posts@update'));
Route::delete('posts/delete', array('before' => 'csrf', 'uses' => 'posts@destroy'));


/* ================================================================================================
 *   COMMITTEE PAGES
 * ================================================================================================ */
Route::get('committee', array('as' => 'committee', 'uses' => 'committees@index'));
Route::get('committees/new', array('as' => 'new_committee', 'uses' => 'committees@new'));
Route::post('committees/create', array('before' => 'csrf', 'uses' => 'committees@create'));
Route::get('committees/(:any)/edit', array('as' => 'edit_committee', 'uses' => 'committees@edit'));
Route::put('committees/update', array('before' => 'csrf', 'uses' => 'committees@update'));
Route::delete('committees/delete', array('before' => 'csrf', 'uses' => 'committees@destroy'));



/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Route::get('/', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
	
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});