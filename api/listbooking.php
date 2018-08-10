<?php
header('Access-control-Allow-Origin: *');
require_once('../includes/initialize.php'); 
extract($_REQUEST);

//$token ='';


// $authenticated = User::authenticateWithtoken($id,$token);

// if($authenticated){

  // $user = User::find_by_id($id);

  // if($user->token == $token) {
     $bookings = Booking::find_all();
     Response::success('got list of booking successfully', $bookings);
   // } 
// }
// Response::failed('Invalid token! You need authorization to get access to this resource');
  



// if(isset($_POST['submit'])) {
//     $new_booking->name = $_POST['name'];
//     $new_booking->reason = $_POST['reason'];
//     $new_booking->start = $_POST['start-time'];
//     $new_booking->end = $_POST['closing-time'];
//     $new_booking->save();
// }

//$sql = "SELECT * FROM qhbooking";


?>

