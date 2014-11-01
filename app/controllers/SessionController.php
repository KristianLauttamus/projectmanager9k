<?php

class SessionController extends \BaseController {

	/**
	 * Display the login page
	 * GET /login
	 *
	 * @return View
	 */
	public function getLogin()
	{
		return View::make('login');
	}

	/**
	 * Display the registration page
	 * GET /register
	 *
	 * @return View
	 */
	public function getRegister()
	{
		return View::make('register');
	}

	/**
	 * Store user session
	 * POST /login
	 *
	 * @return Response
	 */
	public function login()
	{
		if(Auth::attempt(Input::except('_token'), Input::get('remember_me') == 1 ? true : false)){
			return Redirect::route('dashboard');
		} else {
			return Redirect::back()->withInput()->withErrors(array('invalidcredentials'));
		}
	}

	/**
	 * Register a new user
	 * POST /register
	 * 
	 * @return Response
	 */
	public function register()
	{
		$validator = Validator::make(Input::all(), User::$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator->messages);
		} else {

			User::create(array(
					'first_name' => Input::get('first_name'),
					'last_name' => Input::get('last_name'),
					'email' => Input::get('email'),
					'password' => Hash::make(Input::get('password')),
				));

			return Redirect::to('/login')->with('success', Lang::get('register.success'));
		}
	}

	/**
	 * Logout
	 * GET /logout
	 * 
	 * @return Response
	 */
	public function logout()
	{
		Auth::logout();

		return Redirect::to('/');
	}
}