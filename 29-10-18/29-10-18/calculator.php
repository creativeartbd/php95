<?php 

class Calculator {

	private $a;
	private $b;

	public function __construct ($a, $b) {
		$this->a = $a;
		$this->b = $b;
	}

	public function add() {
		echo $this->a + $this->b;
	}

	public function multi() {
		echo $this->a * $this->b;
	}
}

$calculator = new Calculator(5, 5);
$calculator->add();
echo '<br/>';
$calculator->multi();