<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Task extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tasks';

	/**
	 * hapus created_at dan updated_at dari laravel
	 */
	public $timestamps = false;

	public static $rules = [
		'course_id' => ['integer','required'],
		'deadline' => ['date_format:Y-m-d H:i:s'],
		'user_id' => ['integer','required']
	];
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

}
