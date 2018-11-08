<style>
	body {
		background-color: #000;
		color : #fff;
		font-size: 35px;
	}
</style>
<?php
// $errors = array(
// 	'username is not correct'
// );
// ternary operator 

echo '<hr/>';

// echo true ? 0 : 1 ? true : 2;

echo '<hr/>';

$logged = true;

echo $logged ? 'Welcome' : 'Exit';

echo '<br/>';

if($logged) {
	echo 'Welcome';
} else {
	echo 'Exit';
}

echo '<hr/>';

$name = true;

if(!$name) {
	echo '$name is defined';
} else {
	echo 'not defined';
}

echo '<br/>';

$price = 16;

if( $price == 10 ) {
	echo 'I can buy the goods';
} elseif( $price == 15) {
	echo 'Hmm, not bad';
} elseif ( $price == 20 ) {
	echo 'Too much';
} else {
	echo 'Okay';
}