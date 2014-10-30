<?php

class MessageController extends BaseController {

	protected $layout = 'layouts.master';

	public function showIndex($contact_id){
        $messages = Message::where('contact_id','=',$contact_id])->orderBy('created_at')->paginate(15);
        return View::make('message.index',['messages'=>$messages]);
    }

    

}
