<?php
// magic method
// getter and setter 

class MyClass {

	public $setName;

	// public function __get($name) {
	// 	echo 'My undefined property name is: ' . $name;
	// }

	public function __set ($name, $value) {
		
		echo $value;
	}

	// public function __call ($name, $value) {
	// 	echo 'My undefined method name is: ' . $name;
	// 	echo '<hr/>';
	// 	echo array_sum($value);
	// 	echo '<pre>';
	// 	print_r($value);
	// 	echo '</pre>';
	// }
}

$myClass = new MyClass;
// echo $myClass->habijabi(1,3, 4, 5); // what is the output
// echo $myClass->rabi;
echo $myClass->rabi = 'Rabi Value';


echo '<hr/>';

class Calculator {

	public $name;

	public function setName ($name) {
		$this->name = $name;
	}

	public function getName () {
		return $this->name;
	}
}

$calculator = new Calculator;
$calculator->setName('Mulitple');
echo $calculator->getName();