<?php

class TugasController extends BaseController {

	protected $layout = 'layouts.master';

	public function showSubmit(){ return View::make('tugas.submit'); }

    public function doSubmit(){
    	if (Input::hasFile('file')){
    		$file = Input::file('file');
    		$file->move('uploads','tes');
    	} else {
    		return View::make('tugas.submit');
    	}
    }
}
