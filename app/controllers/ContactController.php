<?php

class ContactController extends BaseController {

	protected $layout = 'layouts.master';

	public function showIndex($contact_id){
        return View::make('message.index',['messages'=>$messages]);
    }

     

}
