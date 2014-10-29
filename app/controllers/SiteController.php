<?php

class SiteController extends BaseController {

	protected $layout = 'layouts.master';

	public function showDaftar() { return View::make('site.daftar'); }

	public function doDaftar(){
		$validator = Validator::make(Input::all(),User::$rules);
		if ($validator->fails()){
			return Redirect::action('SiteController@showDaftar')->withInput()->withErrors($validator);
		} else {
			$model = new User;
			$model->username = Input::get('username');
			$model->password = Hash::make(Input::get('password'));
			$model->save();
			return View::make('site.daftar-berhasil');
		}
	}

	public function showLogin(){ $this->layout->content = View::make('site.login'); /*content != @content in blade */ }

	public function doLogin(){
		$user = ['username' => Input::get('username'), 'password' => Input::get('password') ];
		if (Auth::attempt($user)) {
		} else {
			return Redirect::action('SiteController@showLogin')->withInput(Input::only(['username']))->withErrors();
		}
	}

	public function doLogout(){
		Auth::logout();
		return Redirect::action('SiteController@showLogin');
	}

}
