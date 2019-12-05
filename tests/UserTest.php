<?php

use PHPUnit\Framework\TestCase;

Class UserTest extends TestCase {
	
	public function testReturnFullName() {
		
		require 'User.php';
		$user = new User;
		$user->first_name = 'Kashif';
		$user->sur_name = 'Zahoor';
		$this->assertEquals('Kashif Zahoor', $user->getFullName());
	}
	
}