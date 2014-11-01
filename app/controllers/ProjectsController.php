<?php

class ProjectsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /projects
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = Project::all();
		return View::make('projects.index')->with('projects', compact($projects));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /projects/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('projects.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /projects
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Project::$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors();
		} else {
			Project::create(array(
					'name' => Input::get('name'),
					'description' => Input::get('description'),
					'deadline' => Input::get('deadline')
				));

			return Redirect::route('projects.index')->with('success', Lang::get('tasks.created'));
		}
	}

	/**
	 * Display the specified resource.
	 * GET /projects/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$project = Project::findOrFail($id);
		return View::make('projects.show', $project);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /projects/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$project = Project::findOrFail($id);
		return View::make('projects.edit', $project);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /projects/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$project = Project::findOrFail($id);
		$validator = Validator::make(Input::all(), Project::$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors();
		} else {
			$project->name = Input::get('name');
			$project->description = Input::get('description');
			$project->deadline = Input::get('deadline');

			return Redirect::route('projects.index')->with('success', Lang::get('projects.updated'));
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /projects/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Project::destroy($id);
		
		return Redirect::route('projects.index')->with('success', Lang::get('projects.destroyed'));
	}

}