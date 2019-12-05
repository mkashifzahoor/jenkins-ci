<?php

Class User {
	
	public $first_name;
	
	public $sur_name;
	
	
	public function getFullName() {
		
		return "$this->first_name $this->sur_name";
	}
	
}