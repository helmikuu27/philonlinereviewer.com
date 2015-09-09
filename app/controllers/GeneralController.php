<?php

class GeneralController extends \BaseController {
	
		
	public function ShowExamination(){	
		return View::make('let-exam');	
	}
	
	public function ShowError(){	
		return View::make('general-education-error');		
	}
	public function RecordGeneral(){
		
		$name= Config::get('generalgenerator.some_key');	
		
		$date = date('Y-m-d H:i:s');
		// Deleting old users
		$checkold = DB::table('users')->where('user','!=', $name)->first();

		$lastupdate= ($checkold->updated_at); 
		$from = new DateTime($lastupdate);
		$to   = new DateTime($date);
		$gap  = $from->diff($to)->d;			
		
		if($gap > 5){
			$old  = ($checkold->user);
			$DeleteOld = Schema::dropIfExists($old);
		}

		// Insert new user		
		$reg = DB::table('users')->where('user', '=', $name)->first();   

		if (is_null($reg)){
		$adduser=DB::insert('insert into users (user, item, exam) values (?, ?, ?)', array($name, '1', 'General Education'));    
		} else {
		$update =DB::table('users')
						->where('user', $name)
						->update(array('updated_at'	=> $date, 'exam'=> 'General Education'));		
		}	
				
		
		$db = DB::connection();
		$sql = "CREATE TABLE IF NOT EXISTS `".$name."` ( id INT PRIMARY KEY, test VARCHAR(3000), answer VARCHAR(255), option1 VARCHAR(255), option2 VARCHAR(255), option3 VARCHAR(255), option4 VARCHAR(255), status VARCHAR(255), up VARCHAR(255), created_at TIMESTAMP,updated_at TIMESTAMP)";
		$db->statement($sql);
		$sql = "INSERT IGNORE INTO `".$name."` SELECT * FROM genexams ON DUPLICATE KEY UPDATE `up` = 'done'";
		$db->statement($sql);
		
		return View::make('general-education');
		
	}		
	
	public function GeneralCheck(){	
		$date = date('Y-m-d H:i:s');
		$name= Config::get('generalgenerator.some_key');
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
			$dothis =DB::table('users')->where('user', $name)
			->update(array('item' => $addthis,'score' => $addscore,'updated_at'=> $date));			
			
			$affected = DB::update("update $name set status = '2' where id = ?", array($id));
			Session::flash('message', "You've got the correct answer. Please proceed.");					
			return View::make('general-education');
		}else{		
			$go=DB::table('users')->where('user', $name)->update(array('score' => $samescore,'item' => $addthis));
			$affected = DB::update("update $name set status = '2' where id = ?", array($id));
			$o =Session::put('check', ($answer));
			$i = $o=Session::put('id', ($item));
			Session::flash('error', "Sorry, the correct answer is letter ".$answer.".");
			return Redirect::to('general-education-error');					
		}
	
	}	
	
	public function GeneralSuggest(){			
		$ii = Session::get('id');
		$date = date('Y-m-d H:i:s');
		$answer = Input::get('ans');
		$message = Input::get('textarea');
		
		$ip			=$_SERVER['REMOTE_ADDR'];
		$recipient	='kanarubi@gmail.com';
		$sender		='support@philonlinereviewer.com';								
		
		$subject   	="General Education";
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
		
		$rr = DB::table('generalerrors')->where('item', '=', $ii)->first(); 		
		
		if (is_null($rr)){
		$add=DB::insert("insert into generalerrors (item, $answer) values (?, ?)", array($ii, 1));    
		}else{
		$score=($rr->$answer);
		$update =DB::table('generalerrors')->where('item', $ii)->update(array($answer =>  $score + 1, 'updated_at' => $date));		
		}		
		//get the data
		$datainfo = DB::table('generalerrors')
				->Where('item', $ii)	
				->get();
		
		return View::make('general-education-error')			
		->with('info', $datainfo);		
	
	}
	public function ShowFinish(){
				
				$name= Config::get('generalgenerator.some_key');										
		
				$user = DB::table('users')->where('user', $name)->get(); 				
				
				$done=DB::statement("drop table $name");
				
								
		return View::make('finish')
		->with('data', $user);	
	}
}
