<?php

class FacultyController extends BaseController {

	protected $layout = 'layouts.master';

	public function showTambahFaculty() { return View::make('site.tambah-faculty'); }
	public function doTambahFaculty() { 
		$validator = Validator::make(Input::all(),Faculty::$rules);
		if ($validator->fails()){
			return Redirect::action('FacultyController@showTambahFaculty')->withInput()->withErrors($validator);
		} else {
			$model = new Faculty;
			$model->name = Input::get('name');
			$model->department_id = 1;
			$model->semester = Input::get('semester');
			$model->description = Input::get('description');
			$model->save();
			return View::make('site.daftar-berhasil');
		}
	}
}
