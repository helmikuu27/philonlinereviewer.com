<?php 
$orderid = md5($_SERVER['HTTP_USER_AGENT'] .  gethostname());
return array( 'some_key' => $orderid );