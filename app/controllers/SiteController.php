<?php

class SiteController extends BaseController {

	protected $layout = 'layouts.master';

	public function showIndex() { return View::make('hello'); }

	public function showDaftar() { return View::make('site.daftar'); }

	public function showTambahCourse() { return View::make('site.tambah-course');}

	public function doDaftar(){
		$validator = Validator::make(Input::all(),User::$rules);
		if ($validator->fails()){
			return Redirect::action('SiteController@showDaftar')->withInput()->withErrors($validator);
		} else {
			$model = new User;
			$model->username = Input::get('username');
			$model->password = Hash::make(Input::get('password'));
			$model->email = Input::get('email');
			$model->fullname = Input::get('fullname');
			$model->school = Input::get('school');
			$model->save();
			return View::make('site.daftar-berhasil');
		}
	}

	public function showLogin(){ $this->layout->content = View::make('site.login'); /*content != @content in blade */ }

	public function doLogin(){
		$user = [
			'username' => Input::get('username'), 
			'password' => Hash::make(Input::get('password')) 
			];

		if (Auth::attempt($user)) {
			return Redirect::action('SiteController@showLogin');
		} else {
			return Redirect::action('SiteController@showLogin')->withInput(Input::only(['username']));
		}
	}

	public function doLogout(){
		Auth::logout();
		return Redirect::action('SiteController@showLogin');
	}

	public function showUser(){
		$users = User::orderBy('username','desc')->paginate(1);
		return View::make('site.user',['users' => $users]);
	}
}
