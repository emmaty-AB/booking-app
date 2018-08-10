<?php
header('Access-control-Allow-Origin: *');
require_once('../includes/initialize.php'); 

if(isset($_REQUEST['username']) && isset($_REQUEST['password'])) {

    $username = trim($_REQUEST['username']);
    $password = trim($_REQUEST['password']);
    $new_password = trim($_REQUEST['new_password']);

    $found_user = User::authenticate($username, $password);
    //$sql = "UPDATE users SET password = ". $password. " LIMIT 1";

    if($found_user) {

        extract($_REQUEST);

        $new_user = new User();
        $bookings = (new Booking())->find_all();
        $new_user->password = $new_password;

         if($new_user->password_update($new_password)) {
            Response::success('changed password successfully', $bookings);
         }
    }
    Response::failed('Unable to change password');
 
}


