<?php

class Project extends \Eloquent {
	
	protected $table = "projects";
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
		return $this->hasMany('Task');
	}

	public function assignedUsers(){
		return $this->belongsToMany('User', 'user_project');
	}
}