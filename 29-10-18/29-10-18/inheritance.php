<?php 

define('MYCONST', 'my constance value');

// base class or parent class
class Student {

	const PROGRAM 		= 'CSE';

	public $roll 		=	15;
	public $name 		= 	'Alex';
	public $mark 		=	'Passed';

	private $phone 		=	'123456';

	protected $email 	=	'alex@gmail.com';
}

$student = new Student;

// child class / inheritance...

class department extends Student {	

	// alreayd got all property and method from the parent class

	public $whatever = true;

	public function studentBio () {
		echo $this->roll;
		echo '<br/>';
		echo $this->name;
		echo '<br/>';
		echo $this->mark;
		echo '<hr/>';	
		echo self::PROGRAM;
	}

	
}

$department = new department;
// echo $department->roll;
// echo $department->name;
// echo $department->phone;
$department->studentBio();
echo $department->whatever;

echo '<br/>';

echo MYCONST;

echo '<br/>';

echo Student::PROGRAM;
