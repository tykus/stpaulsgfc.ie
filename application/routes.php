<?php

/* ================================================================================================
 *   APPLICATION ROOT
 * ================================================================================================ */
Route::get('/', 'pages@home');


/* ================================================================================================
 *   AUTHENTICATION
 * ================================================================================================ */
Route::post('login', function() {
    // get POST data
    $credentials = array(
		'username' => Input::get('email'),
		'password' => Input::get('password')
	);
	if(Auth::attempt($credentials))
    {
        return Redirect::to('home')->with('flash', 'Welcome back, ' . Auth::user()->name . '!');
    } else {
        return Redirect::to('home')->with('error', 'There was a problem with your login attempt');
    }
	
	
});
Route::get('logout', function() {
    Auth::logout();
    return Redirect::to('/');
});


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
Route::get('posts', array('before' => 'auth', 'as'=>'posts', 'uses'=>'posts@index'));
Route::get('posts/(:any)', array('before' => 'auth', 'as'=>'show_post', 'uses'=>'posts@show'));
Route::get('posts/new', array('before' => 'auth', 'as' => 'new_post', 'uses' => 'posts@new'));
Route::post('posts/create', array('before' => 'auth|csrf', 'uses' => 'posts@create'));
Route::get('posts/(:any)/edit', array('before' => 'auth', 'as' => 'edit_post', 'uses' => 'posts@edit'));
Route::put('posts/update', array('before' => 'auth|csrf', 'uses' => 'posts@update'));
Route::delete('posts/delete', array('before' => 'auth|csrf', 'uses' => 'posts@destroy'));


/* ================================================================================================
 *   COMMITTEE PAGES
 * ================================================================================================ */
Route::get('committee', array('as' => 'committee', 'uses' => 'committees@index'));
Route::get('committees/list', array('before' => 'auth', 'as' => 'committee_list', 'uses' => 'committees@list'));
Route::get('committees/new', array('before' => 'auth', 'as' => 'new_committee', 'uses' => 'committees@new'));
Route::post('committees/create', array('before' => 'auth|csrf', 'uses' => 'committees@create'));
Route::get('committees/(:any)/edit', array('before' => 'auth', 'as' => 'edit_committee', 'uses' => 'committees@edit'));
Route::put('committees/update', array('before' => 'auth|csrf', 'uses' => 'committees@update'));
Route::delete('committees/delete', array('before' => 'auth|csrf', 'uses' => 'committees@destroy'));


/* ================================================================================================
 *   TEAMS PAGES
 * ================================================================================================ */
Route::get('teams', array('before' => 'auth', 'as'=>'teams', 'uses'=>'teams@index'));
Route::get('teams/(:any)', array('before' => 'auth', 'as'=>'show_team', 'uses'=>'teams@show'));
Route::get('teams/new', array('before' => 'auth', 'as' => 'new_team', 'uses' => 'teams@new'));
Route::post('teams/create', array('before' => 'auth|csrf', 'uses' => 'teams@create'));
Route::get('teams/(:any)/edit', array('before' => 'auth', 'as' => 'edit_team', 'uses' => 'teams@edit'));
Route::put('teams/update', array('before' => 'auth|csrf', 'uses' => 'teams@update'));
Route::delete('teams/delete', array('before' => 'auth|csrf', 'uses' => 'teams@destroy'));


/* ================================================================================================
 *   COMPETITIONS PAGES
 * ================================================================================================ */
Route::get('competitions', array('before' => 'auth', 'as'=>'competitions', 'uses'=>'competitions@index'));
Route::get('competitions/(:any)', array('as'=>'show_competition', 'uses'=>'competitions@show'));
Route::get('competitions/new', array('before' => 'auth', 'as' => 'new_competition', 'uses' => 'competitions@new'));
Route::post('competitions/create', array('before' => 'csrf', 'uses' => 'competitions@create'));
Route::get('competitions/(:any)/edit', array('before' => 'auth', 'as' => 'edit_competition', 'uses' => 'competitions@edit'));
Route::put('competitions/update', array('before' => 'csrf', 'uses' => 'competitions@update'));
Route::delete('competitions/delete', array('before' => 'csrf', 'uses' => 'competitions@destroy'));


/* ================================================================================================
 *   VENUE PAGES
 * ================================================================================================ */
Route::get('venues', array('before' => 'auth', 'as'=>'venues', 'uses'=>'venues@index'));
Route::get('venues/new', array('before' => 'auth', 'as' => 'new_venue', 'uses' => 'venues@new'));
Route::post('venues/create', array('before' => 'csrf', 'uses' => 'venues@create'));
Route::get('venues/(:any)/edit', array('before' => 'auth', 'as' => 'edit_venue', 'uses' => 'venues@edit'));
Route::put('venues/update', array('before' => 'csrf', 'uses' => 'venues@update'));
Route::delete('venues/delete', array('before' => 'csrf', 'uses' => 'venues@destroy'));

/* ================================================================================================
 *   USER PAGES
 * ================================================================================================ */
Route::get('users/(:any)/edit', array('before' => 'auth', 'as' => 'edit_user', 'uses' => 'users@edit'));
Route::put('users/update', array('before' => 'csrf', 'uses' => 'users@update'));


/* ================================================================================================
 *   FIXTURES PAGES
 * ================================================================================================ */
// Protected routes
Route::get('fixture_list', array('before' => 'auth', 'as'=>'fixture_list', 'uses'=>'fixtures@index'));
Route::get('fixtures/(:any)', array('as'=>'show_fixture', 'uses'=>'fixtures@show'));
Route::get('fixtures/new', array('before' => 'auth', 'as' => 'new_fixture', 'uses' => 'fixtures@new'));
Route::post('fixtures/create', array('before' => 'auth|csrf', 'uses' => 'fixtures@create'));
Route::get('fixtures/(:any)/edit', array('before' => 'auth', 'as' => 'edit_fixture', 'uses' => 'fixtures@edit'));
Route::put('fixtures/update', array('before' => 'auth|csrf', 'uses' => 'fixtures@update'));
Route::delete('fixtures/delete', array('before' => 'auth|csrf', 'uses' => 'fixtures@destroy'));
// Public routes
Route::get('results', array('as'=>'results', 'uses' => 'fixtures@results'));
Route::get('fixtures', array('as'=>'fixtures', 'uses' => 'fixtures@fixtures'));






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
	if (Auth::guest()) return Redirect::to('home');
});