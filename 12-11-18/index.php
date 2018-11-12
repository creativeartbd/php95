<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
/*
while
do while 
for 
forearch
*/

$price = 130;

switch ($price) {
	case 10:
	echo 'price is 10';
	break;

	case 20: 
	echo 'price is 20';
	break;

	default:
	echo 'default value';
}
echo '<hr/>';

// break 

for ($i=0; $i < 10; $i++) { 

	echo $i;
	echo '<br/>';

	if($i == 5) {
		break;
	}
	
}


echo '<hr/>';


// foreach -- only for array
// $studnents = array(
// 	'sakib', 'rasel', 'bappi',
// );

$students = [
	'sakib', 'rasel', 'bappi',
];

$no_of_students = count($students);

for ($i=0; $i < $no_of_students; $i++) { 
	echo $students[$i];
	echo '<br/>';
}

echo '<hr/>';


// foreach loop


echo '<hr/>';

$students = [
	'sakib', 'rasel', 'bappi',
];

$no_of_st = count($students);

$initial = 0;
foreach ($students as $student) {
	if($initial <= 1) {
		echo $student;
		echo '<br/>';
	}	
	$initial++;
}


echo '<hr/>';

$students = [
	'sakib', 'rasel', 'bappi',
];

echo count($students);

foreach ($students as $student) {
	if($student == 'rasel') {
		echo 'welcome rasel';
	}	
}

echo '<hr/>';

// for loop 
for ( $i=0; $i <= 10; $i++) {
	echo 'I love php <br/>';
}

echo '<hr/>';

// do while loop

$a = 10;
do {
	echo $a;
	echo '<br/>'; 
	$a++;
} while ($a <= 8);

echo '<hr/>';

$a = 0;
do {
	echo $a;
	echo '<br/>'; 
	$a++;
} while ($a <= 10);

echo '<hr/>';


// while loop
$number = 10;
while ($number >= 0) {
	echo $number;
	echo '<br/>';
	$number--;
}

echo '<hr/>';


$number = 0;
while ( $number <= 10 ) {
	echo $number;
	echo '<br/>';
	$number++;
}

$logged2 = false;
if($logged2): 
?>
<h1>Welcome to your dashboard</h1>
<?php else: ?>
<h1>You need to login</h1>
<?php endif; ?>


<?php
// alternative way 
$logged = false;

if($logged) {
?>
<form action="">
	<table>
		<tr>
			<td>username</td>
			<td><input type="text" placeholder="enter your username"></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="password" placeholder="password"></td>
		</tr>
	</table>
</form>
<?php } else { ?>
	<h1>You need to logged to view your dashboard</h1>
<?php } ?>

</body>
</html>