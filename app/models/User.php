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

	public static $rules = array(
		'first' => 'required|max:20',
		'last' => 'required|max:20',
		'email' => 'required|email|unique:users',
		'password' => 'required|between:4,32|confirmed',
		'password_confirmation' => 'required|between:4,32',
		'address1' => 'required',
		'city' => 'required',
		'state' => 'required',
		'zip' => 'required',
		'phone' => 'required',
		'category' => 'required'
	);

}
