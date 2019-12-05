<?php

use PHPUnit\Framework\TestCase;

Class user_login_test extends TestCase {
	
	public function test_login_functionality() {
		
		$this->post('../user_login.php', ['HTTP_USERNAME' => 'extoleviews@gmail.com'])
            ->assertSessionHasErrors($formInput);
		/*header('HTTP_USERNAME:extoleviews@gmail.com');
		header('HTTP_PASSWORD:12345678');
		require '../user_login.php';
		$obj = new user_login;
		$obj->login();*/
	}
}