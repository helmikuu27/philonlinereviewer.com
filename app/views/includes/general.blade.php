<?php
$date = date('Y-m-d H:i:s');

// Deleting old users
$checkold = DB::table('users')->where('updated_at','!=', $date)->first();

$lastupdate= ($checkold->updated_at); 
$from = new DateTime($lastupdate);
$to   = new DateTime('today');
$gap  = $from->diff($to)->d;

if($gap > 0){
	$old  = ($checkold->user);
	$DeleteOld = Schema::dropIfExists( $old); 	
}

// Insert new user
$orderid= Config::get('userid.some_key');
$fid=Session::put('name', ($orderid));
$n = Session::get('name');
$name = 'gen'.$n;

$reg = DB::table('users')->where('user', '=', $name)->first();   

if (is_null($reg)){
$adduser=DB::insert('insert into users (user, item) values (?, ?)', array($name, '1'));    
} else {
$update =DB::table('users')
				->where('user', $name)
				->update(array(
						'score' 		=> 0,
						'item' 			=> 1,
						'updated_at'	=> $date
				));		
}
?>
