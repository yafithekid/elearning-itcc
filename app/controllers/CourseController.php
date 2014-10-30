<?php

class CourseController extends BaseController {

	protected $layout = 'layouts.master';

	public function showTambahCourse() { return View::make('site.tambah-course'); }
	public function doTambahCourse() { 
		$validator = Validator::make(Input::all(),Course::$rules);
		if ($validator->fails()){
			return Redirect::action('CourseController@showTambahCourse')->withInput()->withErrors($validator);
		} else {
			$model = new Course;
			$model->name = Input::get('name');
			$model->department_id = 1;
			$model->semester = Input::get('semester');
			$model->description = Input::get('description');
			$model->save();
			return View::make('site.daftar-berhasil');
		}
	}
}
