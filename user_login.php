<?php

class user_login {
	
	public $valid_emails = array('extoleviews@gmail.com',
								  'abbasshah17@gmail.com',
								  'fiaz.hm@gmail.com');
	
	function __construct() {
		
		$this->login();
	}
	
	public function login() {
		
		$username = $_SERVER['HTTP_USERNAME'];
		$password = $_SERVER['HTTP_PASSWORD'];
		
		if(!$username || !$password) {
			$msg =  "Please enter valid email and password";
			$status = 'failure';
		} else if(!in_array($username, $this->valid_emails)) {
			$msg = 'Email not valid';
			$status = 'failure';
		} else {
			$msg = 'Login successful for 48 hours';
			$status = 'success';
		}
		$response = array('status' => $status,
				'message' => $msg);
		header('Content-type: text/json');
		echo $response = json_encode($response);
	}
}

$obj = new user_login;