<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Contact extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'contacts';

	/**
	 * hapus created_at dan updated_at dari laravel
	 */
	public $timestamps = false;

	/**
	 * digunakan buat laravel Auth::attempt
	 */
	public function getAuthIdentifier(){ return 'username'; }

	public function user() {
		return $this->belongsTo('User','user_id','id');
	}

	public function contactUser() {
		return $this->belongsTo('User','contact_user_id','id');
	}

	public static $rules = [
		'username' => ['unique:users','required'],
		'password' => 'required',
		'email' => 'required',
		'fullname' => 'required',
		'school' => 'required',
	];
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');


}
