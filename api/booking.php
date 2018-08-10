<?php

header('Access-control-Allow-Origin: *');
//header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once('../includes/initialize.php');


/*$data = json_decode(file_get_contents("../includes/book1.php"));
	$new_booking = new Booking();
    $new_booking->name= $data->name;
    $new_booking->reason; //=$data->reason;
    $new_booking->start; //=$data->start;
    $new_booking->end; //= $data->end;
    $new_booking->room; //= $data->room;
    //$new_booking->save();*/

?>



