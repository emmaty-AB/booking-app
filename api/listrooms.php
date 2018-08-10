<?php
header('Access-control-Allow-Origin: *');
require_once('../includes/initialize.php'); 

if($results = Listofbooking::find_all()){
	Response::success('Got rooms successfully', $results);
}
Response::failed('Failed to query rooms');

?>