<?php

class SiteController extends BaseController {

	public function showDaftar()
	{
		return View::make('site.daftar');
	}

	public function doDaftar(){
		

		$validator = Validator::make(Input::all(),User::$rules);
		if ($validator->fails()){
			return Redirect::action('SiteController@showDaftar')->withInput()->withErrors($validator);
		} else {
			$model = new User;
			$model->username = Input::get('username');
			$model->password = sha1(Input::get('password'));
			$model->save();
			return View::make('site.daftar-berhasil');
		}
	}

	

}
