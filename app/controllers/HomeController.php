<?php

class HomeController extends BaseController {

	protected $user;

	public function __construct()
	{
		$this->user = Auth::user();
	}

	public function home() {

		/*
		 	Mail::send('emails.auth.test', array('name' => 'Sevak'), function($message) {
				$message->to('gevorkyansev@gmail.com', 'Sevak Gevorkyan')->subject('test email');
			});
		 */


		return View::make('home')->with('user', $this->user);
	}

}
