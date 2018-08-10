<?php
header('Access-control-Allow-Origin: *');

require_once('../includes/initialize.php');

extract($_REQUEST);

$new_booking = new Booking();
$new_booking->user_id = $user_id;
$new_booking->name = $name;
$new_booking->reason = $reason;
$new_booking->start = $start;
$new_booking->end = $end;
$new_booking->room = $room;
if($new_booking->save()){Response::success('saved successfully');}
Response::failed('Not succesful');

    