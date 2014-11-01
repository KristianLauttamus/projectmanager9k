<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	 * The attributes fillable for mass assignment.
	 *
	 * @var array
	 */
	protected $fillable = array('first_name', 'last_name', 'password', 'email', 'admin', 'remember_token');

	/**
	 * Registeration rules for User model.
	 *
	 * @var array
	 */
	public static $rules = array(
			'first_name' => 'required|min:2',
			'last_name' => 'required|min:2',
			'password' => 'required|confirmed',
			'email' => 'email|required'
		);

	public static $adminRules = array(
			'first_name' => 'required|min:2',
			'last_name' => 'required|min:2',
			'email' => 'email|required'
		);

	public function tasks(){
		$this->hasMany('Task');
	}
}
