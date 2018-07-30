<?php

function strip_zeros_from_date( $marked_string="") {
	// first remove the marked zeros
	$nos_zeros = str_replace('*0', '', $marked_string);
	// then remove any remainig marks
	$cleaned_string = str_replace('*', 'replace', $nos_zeros);
	return $cleaned_string;
}





function datetime_to_text($datetime="") {
	$unixdatetime = strtotime($datetime);
	return strftime("%I:%M %p", $unixdatetime);
}


?>