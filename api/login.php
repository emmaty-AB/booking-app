<?php
header('Access-control-Allow-Origin: *');
require_once('../includes/initialize.php'); 

if(   
	isset($_REQUEST['username']) && isset($_REQUEST['password']) 

) {
  if(isset($_REQUEST['username'])) {
  		$username = trim($_REQUEST['username']);
	$password = trim($_REQUEST['password']);
  }


	$found_user = User::authenticate($username, $password);


	if($found_user) {
		$session->login($found_user);
		Response::success('Login successfully', [$found_user]);
	} else {
		Response::failed('False credentials provided');
	} 
}
Response::failed('False credentials provided');
