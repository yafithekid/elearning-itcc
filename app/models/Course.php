<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Course extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'courses';

	/**
	 * hapus created_at dan updated_at dari laravel
	 */
	public $timestamps = false;

	/**
	 * digunakan buat laravel Auth::attempt
	 */
	public function getAuthIdentifier(){ return 'username'; }

	public static $rules = [
		'name' => 'required',
		'semester' => 'required',
		'description' => 'required',
	];
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');


}
