<?php

class CivilController extends \BaseController {

	
	public function RecordCivil(){
		$name= Config::get('civilgenerator.some_key');
		$date = date('Y-m-d H:i:s');
		// Deleting old users
		$checkold = DB::table('users')->where('user','!=', $name)->first();

		$lastupdate= ($checkold->updated_at); 
		$from = new DateTime($lastupdate);
		$to   = new DateTime('today');
		$gap  = $from->diff($to)->d;

		if($gap > 5){
			$old  = ($checkold->user);
			$DeleteOld = Schema::dropIfExists( $old); 	
		}

		// Insert new user
		$reg = DB::table('users')->where('user', '=', $name)->first();   

		if (is_null($reg)){
		$adduser=DB::insert('insert into users (user, item, exam) values (?, ?, ?)', array($name, '1', 'Civil Examination'));    
		} else {
		$update =DB::table('users')
						->where('user', $name)
						->update(array('updated_at'	=> $date, 'exam'=> 'Civil Examination'));		
		}
		$name= Config::get('civilgenerator.some_key');
		return View::make('civil-examination');
		
	}
	
	public function ShowCivil(){	
		return View::make('civil-examination');		
	}
	public function ShowCivilError(){	
		return View::make('civil-examination-error');		
	}
	public function CivilCheck(){		
		$name= Config::get('civilgenerator.some_key');
		$item = Session::get('id');
		
		$validate = DB::table($name)->where('id',$item)->first(); 
		
		$id=($validate->id);
		$test=($validate->test);
		$answer=($validate->answer);
		$ans=Input::get('ans');			
				
			
		$ucheck = DB::table('users')->where('user', $name)->first();
			$score=($ucheck->score);
			$idfirst=($ucheck->item);
			$addthis =	$idfirst + 1;	

			$samescore=$score;			
			$addscore =$score + 1;
						
			
		if($ans==$answer){		
			$go =DB::table('users')
				->where('user', $name)
				->update(array(
						'score' => $addscore,
						'item' => $addthis
						));			
			$affected = DB::update("update $name set status = '2' where id = ?", array($id));
			Session::flash('message', "You've got the correct answer. Please proceed.");			
			return Redirect::to('civil-examination');
		}else{		
			$go=DB::table('users')
				->where('user', $name)
				->update(array(
						'score' => $samescore,
						'item' => $addthis
						));
			$affected = DB::update("update $name set status = '2' where id = ?", array($id));
			$o =Session::put('check', ($answer));
			$i = $o=Session::put('id', ($item));
			Session::flash('error', "Sorry, the correct answer is letter ".$answer.".");
			return Redirect::to('civil-examination-error');					
		}
	
	}	
	
	public function CivilSuggest(){			
		$ii = Session::get('id');
		$date = date('Y-m-d H:i:s');
		$answer = Input::get('ans');
		$message = Input::get('textarea');
		
		$ip			=$_SERVER['REMOTE_ADDR'];
		$recipient	='kanarubi@gmail.com';
		$sender		='support@philonlinereviewer.com';								
		
		$subject   	="Civil Service Examination";
		$body 		= "<html>\n";
		$body 		.= "<body style=\"font-family:Verdana, Verdana, Geneva, sans-serif; font-size:12px; color:#666666;\">\n";
		$body 		= "	<p>Dear Administrator,</p>						
						<h3>$message</h3>							
						<p>$ii</p>
						<p>$answer</p>						
						<h6>IP: $ip</h6>\r\n";
		$body 		.= "</body>\n";
		$body 		.= "</html>\n";
		
		$headers  = "From: philonlinereviewer.com<support@philonlinereviewer.com>\r\n";
		$headers .= "Reply-To: $sender\r\n";				
		$headers .= "Return-Path: $sender\r\n";
		$headers .= "X-Mailer: Drupal\n";
		$headers .= 'MIME-Version: 1.0' . "\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

		$result = mail($recipient, $subject, $body, $headers); 
		
		$rr = DB::table('civilerrors')->where('item', '=', $ii)->first(); 		
		
		if (is_null($rr)){
		$add=DB::insert("insert into civilerrors (item, $answer) values (?, ?)", array($ii, 1));    
		}else{
		$score=($rr->$answer);
		$update =DB::table('civilerrors')->where('item', $ii)->update(array($answer =>  $score + 1, 'updated_at' => $date));		
		}		
		//get the data
		$datainfo = DB::table('civilerrors')
				->Where('item', $ii)	
				->get();
		
		return View::make('civil-examination-error')			
		->with('info', $datainfo);		
	
	}
	
	public function ShowFinish(){
				
				$name= Config::get('civilgenerator.some_key');										
		
				$user = DB::table('users')->where('user', $name)->get(); 				
				
				$done=DB::statement("drop table $name");
				
								
		return View::make('finish')
		->with('data', $user);	
	}
}
