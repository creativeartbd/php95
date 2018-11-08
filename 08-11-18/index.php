<style>
	body {
		background-color: #000;
		color : #fff;
		font-size: 35px;
	}
</style>
<?php
// logical operator...

/*

__call
__callStatic
__invoke
__toString
__clone
__get
__set
__isset
__static
__construct 
__destruct
*/


$a = true;
$b = false;


if($a xor $b ) {
	echo 'hello';
} else {
	echo 'exit';
}

echo '<hr/>';


// increment and decrement operator..  
$a = 10;
echo $a--; // post increment  pre increment
echo '<br/>';
echo $a;


echo '<hr/>';

$house = 1200;

if($house >= 1200) {
	echo 'I want to buy it';
} else {
	echo 'Oh, I am unable to buy';
}

echo '<hr/>';

$password = '123456';
$password_2 = 123456;

if($password !== $password_2) {
	echo 'Both password is not true';
} else {
	echo 'Both are equal';
}


echo '<hr/>';

$password = '123456';
$password_2 = '1234567';

if($password <> $password_2) {
	echo 'Both password is not true';
} else {
	echo 'Both are equal';
}


echo '<hr/>';


echo '<br/>';

echo 2 * 5 + 3; // 13

echo '<br/>';

// www.w3resource.com
$price = 110;

if( $price != 100) {
	echo 'Buy the t-shirt';
} else {
	echo 'OOPs! I can\'t buy it';
}

echo '<hr/>';

if( $price == 100) {
	echo 'Buy the t-shirt';
} else {
	echo 'OOPs! I can\'t buy it';
}

echo '<hr/>';


$a = 10;
$b = '10';

$a == 10;

/* control structure....*/

if ( $a === $b ) {
	echo ' both are same';
} else {
	echo ' both are not ture';
}




echo '<hr/>';


$a = 45;
$b = 54;

echo $a & $b;

echo '<hr/>';

// decimale =  base 10 = 45464
// binary   = base 2 = 0 1 
// octal    = base 8 = 0-7
// hexadecimal = base 16 = 0-9 A-F

// operator..

// passed by reference....

function welcome ( &$arg, &$arg_1) {
	$arg = 'Welcome to my World';
	$arg_1 = 'Welcome to my fucntion';
}

$string = 'welcome to my house';
$string_2 = 'second string';

welcome($string, $string_2);
echo $string;
echo '<br/>';
echo $string_2;

echo '<hr/>';

// assing by value..
// assign by reference..

$one = 'I am one';
$two = &$one;
$two = 'I am two';
$one = 'last value';

echo $one; // 
echo '<br/>';
echo $two; // 



echo '<hr/>';

// Assignment operator...
$x = 50;
$x += 10;
echo $x;

$y = 50 * 10;

$y = 50;
$y *= 10;

echo $y;


echo '<hr/>';


//  Arithmatic Operator 
$a = 5;
$b = 6;

echo $a + $b;
echo '<br/>';
echo $a - $b;
echo '<br/>';
echo $a * $b;
echo '<br/>';
echo $a / $b;
echo '<br/>';
echo $a % $b;



echo '<hr/>';


// method chaining....

// $string = 'I ';
// $string .= 'Love ';
// $string .= 'PHP ';

// echo $string;

// die();

class Biodata {

	private $data; // null

	public function show_name () {
		$this->data .= 'Alex Mojum';
		return $this;
	}

	// public function show_country () {
	// 	$this->data .= ' America ';
	// 	return $this;
	// }

	// public function show_skills () {
	// 	$this->data .= ' PHP';
	// 	return $this;
	// }

	public function show_bio () {
		return $this->data;
	}

}

$biodata = new Biodata();
echo $biodata->show_name()->show_bio();