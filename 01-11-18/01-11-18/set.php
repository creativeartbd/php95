<?php 

class A {
	public $name = 'MY Name';

	public function __toString () {
		return $this->name;
	}
}

$a = new A;
echo $a;

echo '<hr/>';

class MyName {

	public function __get($name) {
		echo $name;
		echo '<br/>';
	}
	public function __set($name, $value) {
		echo $name;
		echo '<br/>';
		echo $value;
		echo '<br/>';
	}

}

$myName = new MyName;
$myName->tomar_name = 'Alex Mojum';
$myName->pakistan;
