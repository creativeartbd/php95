<?php

define('MYCONSTANT', 'my constant value <hr/>');

echo MYCONSTANT;

class MagicMethod {

	const PRICE = 154;
	static public $name = 'Alex Mojum';
	public $jobTitle = 'Web Developer';

	public function __construct () {
		echo 'I have started my job <hr/>';
	}

	public function jobName () {
		return $this->jobTitle;
	}
}

class MyChild extends MagicMethod {

	//public $jobTitle = 'Laravel Developer';

	public function jobName2 () {
		//return $this->jobTitle;
		//return $this->jobTitle;
		
		return parent::jobName();
	}
}

$magicMethod  = new MagicMethod;
echo MagicMethod::PRICE;
echo MagicMethod::$name = 'Rahim';
echo '<hr/>';
echo MagicMethod::$name;
echo '<hr/>';
$myChild = new MyChild;
echo $myChild->jobName2();
