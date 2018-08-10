<?php

class Response {

	public static function success($message, $payload=[]) {
		$response = ['statusCode'=>1000, 'message'=>$message, 'payload'=>$payload];
		echo json_encode($response);
		exit();
	}

	public static function failed($message, $payload=[]) {
		$response = ['statusCode'=>1001, 'message'=>$message, 'payload'=>$payload];
		echo json_encode($response);
		exit();
	}
}
