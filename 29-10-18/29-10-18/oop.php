<?php

class BaseClass {
	// magic method...
	/*
	__construct 
	__destruct 
	__call
	__callStatic
	__set
	__get
	__invoke
	__isset
	__unset
	__toString	
	__clone
	__sleep
	__wakeup
	*/

	public function __construct ($args) {
		echo 'My Application '. $args . ' has been started <br/>';
	}

	// property 
	public $name 	=	'Alex Mojum';
	public $age 	=	12;
	public $email 	= 	'alex@gmail.com';
	public $skills 	=	array(
		'PHP', 'Laravel', 'Vue', 'React', 'Angular'
	);
	private $balance =	1000;

	// visibility...
	/*
	1. public 
	2. private
	3. protected
	*/

	// method
	public function myBio () {
		//echo 'From the myBio Method........';
		echo $this->name; 
		echo '<hr/>';
		echo $this->age; 
		echo '<hr/>';
		echo $this->email;		
		echo '<hr/>';
		echo $this->balance .' TK.';
	}

}

// create a object
$baseClass = new BaseClass('CRM Software');  // instance...
// access the property
// echo $baseClass->name;
// echo '<br/>';
// echo $baseClass->age;
// echo '<br/>';
// echo $baseClass->email;
// echo '<br/>';
// echo '<pre>';
// print_r( $baseClass->skills );
// echo '</pre>';
// echo '<br/>';

// // $baseClass->balance = 800;

// $baseClass->myBio();

//echo gettype($myClass);