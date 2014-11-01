<?php

class Task extends \Eloquent {
	/**
	 * The attributes fillable for mass assignment.
	 *
	 * @var array
	 */
	protected $fillable = array('name', 'description', 'deadline');
	/**
	 * Registeration rules for User model.
	 *
	 * @var array
	 */
	public static $rules = array(
			'name' => 'required',
			'daystodeadline' => 'numeric',
			'progress' => 'required|numeric'
		);

	
}