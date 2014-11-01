<?php

class Project extends \Eloquent {
	

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
			'deadline' => 'date'				
		);

	public function tasks(){
		$this->hasMany('Task');
	}

	public function assignedUsers(){
		$this->hasMany('user');
	}
}