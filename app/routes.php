<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Loginform
Route::get('login', 'SessionController@getLogin'); 
Route::get('logout', 'SessionController@logout'); 
Route::post('login', array('as' => 'login.post', 'uses' => 'SessionController@login'));

// Registerform
Route::get('register', 'SessionController@getRegister');
Route::post('register', array('as' => 'register.post', 'uses' => 'SessionController@register'));

Route::group(array('before' => 'auth'), function()
{
	// Dashboard
    Route::get('/', array('as' => 'dashboard', 'uses' => 'DashboardController@index'));
    // Projects
    Route::resource('/projects', 'ProjectsController');
    // Tasks
    Route::get('/projects/{projectId}/create/task' , 'TasksController@create');
    Route::post('/projects/{projectId}/create/task' , array('as' => 'tasks.store', 'uses' => 'TasksController@store'));
    // Usermanager
    Route::resource('/users', 'UserController', array('except' => array('create', 'store')));

});

