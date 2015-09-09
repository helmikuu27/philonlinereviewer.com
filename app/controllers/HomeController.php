<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showIndex()
	{
	
		
		$let = DB::table('letscorers')->orderBy('score', 'desc')->skip(0)->take(10)->get();
		$civil = DB::table('civilscorers')->orderBy('score', 'desc')->skip(0)->take(10)->get(); 
		$nursing = DB::table('nursingscorers')->orderBy('score', 'desc')->skip(0)->take(10)->get(); 
		$napolcom = DB::table('napolcomscorers')->orderBy('score', 'desc')->skip(0)->take(10)->get(); 
		
	
		return View::make('index')
		->with('data', $let)
		->with('civil', $civil)
		->with('nursing', $nursing)
		->with('napolcom', $napolcom);
		
	}
	
	public function ShowRequirements()
	{
		return View::make('requirements');
	}
	public function ShowCivilTips()
	{
		return View::make('cs_tips');
	}
	public function ShowOhs()
	{
		return View::make('ohs');
	}
	public function ShowContact()
	{
		return View::make('contact');
	}
	public function sendtous()
	{	
		$ip			=$_SERVER['REMOTE_ADDR'];
		$recipient	='support@philonlinereviewer.com';
		$sender		=Input::get('email');
		$name		=Input::get('name');
		$contact	=Input::get('contact');
		$message	=Input::get('textarea');				
		
		
		$subject   	="Messages&Feedbacks";
		$body 		= "<html>\n";
		$body 		.= "<body style=\"font-family:Verdana, Verdana, Geneva, sans-serif; font-size:12px; color:#666666;\">\n";
		$body 		= "	<p>Dear Administrator,</p>						
						<h3>$message</h3>
						<p>From: $name | $contact</p>						
						<h6>IP: $ip</h6>\r\n";
		$body 		.= "</body>\n";
		$body 		.= "</html>\n";
		
		$headers  = "From: RentaDito.com<support@rentadito.com>\r\n";
		$headers .= "Reply-To: $sender\r\n";				
		$headers .= "Return-Path: $sender\r\n";
		$headers .= "X-Mailer: Drupal\n";
		$headers .= 'MIME-Version: 1.0' . "\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		$result = mail($recipient, $subject, $body, $headers); 
		Session::flash('message', 'Thank you! Your message has been successfully sent.');
		return Redirect::back();
	}

}