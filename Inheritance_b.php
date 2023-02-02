<?php

interface a {
	public function abc();
}

interface b {
	public function xyz();
}

class c implements a, b {

	public function abc() {
		echo 'Welcome To ';
	}
	
	public function xyz() {
		echo 'Wappnet System Pvt. Ltd.';
	}

}

// Create an object
$obj = new c;

$obj->abc();
$obj->xyz();

?>

