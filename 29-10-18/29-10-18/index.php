<?php

function myMath () {
	static $x = 10;
	echo $x;
	$x++;
}

myMath(); // 10
myMath(); // 11 
myMath(); // 12
myMath(); // 13

echo '<hr/>';


function login ($username, $password) {

}

login($username, $password);

// declare..
function bio ($name, $age = 30) {
	echo 'hello world';
	echo 'My name is ' . $name . ' and age is ' . $age;
	echo 'country';

	echo '<hr/>';

	$heredoc = <<<HEREDOC
HEREDOC;

	echo $var = 10+5;
}

bio('Alex Mojum');// call 



echo '<hr/>';


$price = '12';
echo gettype($price);

echo '<hr/>';

$country = 'America $price';
echo $country;

echo '<hr/>';


$name = 'Alex Mojum';

echo $name;

// here doc style
$name = <<<JEKONO
$name
<table>
		<tr>
				<td>Username</td>
					<td><input type="text"></td>
					</tr>
	</table>
JEKONO;

echo $name;

echo '<hr/>';

function registration () {
	$registration = <<<REG

	SD
	FS
	DF
	AS
	DF
	S
	DF
	SD
	F
	ASD
	F
	ASDF
	SD
	F
	SDF
	D
REG;
	return $registration;
}

echo '<hr/>';

$a = 10;
$b = 15;

function addMe3 () {
	// local 
	echo $GLOBALS['a'];
	echo '<br/>';
	echo $GLOBALS['b'];
}


addMe3();

echo '<hr/>';

$a = 10;
$b = 15;

function addMe2 () {
	// local 
	global $a, $b;
	echo $a; 
	echo '<br/>';
	echo $b;
}


addMe2();

echo '<hr/>';

function addMe ($x, $y) {
	echo $x; 
	echo '<br/>';
	echo $y;
}

addMe(4, 5);

echo '<hr/>';

function myCountry() {

	return 'Bangladesh';
}

echo myCountry();

echo '<hr/>';

function showMyName ($name) {
	echo 'My name ' . ' is ' .  $name;
}

showMyName('Alex Mojum');