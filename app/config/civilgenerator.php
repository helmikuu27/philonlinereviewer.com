<?php
	$orderid= Config::get('userid.some_key');
	$fid=Session::put('name', ($orderid));
	$n = Session::get('name');
	
	$name = 'civil'.$n;
	
	$db = DB::connection();
	$sql = "CREATE TABLE IF NOT EXISTS `".$name."` ( id INT PRIMARY KEY, test VARCHAR(3000), answer VARCHAR(255), option1 VARCHAR(255), option2 VARCHAR(255), option3 VARCHAR(255), option4 VARCHAR(255), option5 VARCHAR(255), status VARCHAR(255), up VARCHAR(255), created_at TIMESTAMP,updated_at TIMESTAMP)";
	$db->statement($sql);
	$sql = "INSERT IGNORE INTO `".$name."` SELECT * FROM civilexams ON DUPLICATE KEY UPDATE `up` = 'done'";
	$db->statement($sql);		
		
	return array( 'some_key' => $name );
?>