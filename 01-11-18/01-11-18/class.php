<?php

// create  a car class
class Car {
	// property == variable 
	// method == function 
	// visibility -> public, private, protectred
	// property
	private $name = 'Porshi';

	public $tank = 12; // declare / assign 
	// method
	protected $cost = 500;

	public function drive () {
		return 'Hello there <hr/>';
	}
	public function getTank () {
		echo $this->tank . '<hr/>';
		echo $this->cost . '<hr/>';
	}
}
// create a car objct
$car = new Car; // instance..
echo $car->tank;
echo $car->drive();
echo $car->getTank();


class BMW extends Car {

	public function getTank2 () {
		echo $this->cost;
	}
}

$bmw = new BMW;
$bmw->getTank();
$bmw->tank = 15;
$bmw->getTank();
$bmw->getTank2();