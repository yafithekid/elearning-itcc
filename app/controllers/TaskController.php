<?php

class TaskController extends BaseController {

	protected $layout = 'layouts.master';

	public function showCreate(){ return View::make('task.create'); }

    public function doCreate(){
        $model = new Task;
        $validator = Validator::make(Input::all(),Task::$rules);
        if ($validator->fails()) {
            return Redirect::action('TaskController@showCreate')->withInput()->withErrors($validator);
        } else {
            $model->course_id = Input::get('course_id');
            $model->deadline = Input::get( 'deadline');
            $model->user_id = Input::get('user_id');
            if ($model->save()){
               return Redirect::to("task/$model->id"); 
            }
        }
    }


    public function showIndex(){ return View::make('task.index'); }

    public function doDelete(){

    }

}
