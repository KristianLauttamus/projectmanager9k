<?php

class TasksController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /tasks
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('tasks.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /tasks/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tasks.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /tasks
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Task::$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors();
		} else {
			Task::create(array(
					'name' => Input::get('name'),
					'description' => Input::get('description'),
					'deadline' => Input::get('deadline')
				));

			return Redirect::route('tasks.index')->with('success', Lang::get('tasks.created'));
		}
	}

	/**
	 * Display the specified resource.
	 * GET /tasks/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$task = Task::findOrFail($id);
		return View::make('tasks.show', $task);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /tasks/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$task = Task::findOrFail($id);
		return View::make('tasks.edit', $task);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /tasks/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$task = Task::findOrFail($id);
		$validator = Validator::make(Input::all(), Task::$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors();
		} else {
			$task->name = Input::get('name');
			$task->description = Input::get('description');
			$task->deadline = Input::get('deadline');

			return Redirect::route('tasks.index')->with('success', Lang::get('tasks.updated'));
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /tasks/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Task::destroy($id);

		return Redirect::route('tasks.index')->with('success', Lang::get('tasks.destroyed'));
	}

}