<?php
	$orderid= Config::get('userid.some_key');
	$fid=Session::put('name', ($orderid));
	
	$n = Session::get('name');
	$name = 'gen'.$n;		
	
	return array( 'some_key' => $name );
?>