<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>22-10-18</title>
	<style>body { background-color: #000; color : #fff; font-size: 35px; }</style>
</head>
<body>

<?php 
// function decleration 

// argument 
function show_my_name ($country, $age) {
	echo 'My Name is Alex Mojum';
	echo '<br/>';
	echo $country;
	echo '<br/>';
	echo 'My Age is === ' . $age;
}

// function call parameter...
show_my_name('Bangladesh', 122);


echo '<hr/>';

function Tom_And_Jerry () {
	// vitore apnar kaj korte hobe
	$youtube_video = <<<YOUTUBE
	<iframe width="560" height="315" src="https://www.youtube.com/embed/AGBjI0x9VbM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
YOUTUBE;

	echo $youtube_video;
}

Tom_And_Jerry();
// function call
// amar_name();

echo '<hr/>';

// class example very very very very very very important part.

// a student class
class Student {

}

// create a object from the Student class
$student = new Student;



echo '<hr/>';


echo 'hello' . 'i ' . 'live' . 'in 0' . 12.6;
echo '<hr/>';

$my_fname 	=	'Alex Mojum';
$my_lname 	=	$my_fname . ' Sikdar';

echo $my_lname;

echo '<hr/>';

// array data type
/*
1. Index Array / Numeric Array
2. Associative Array
3. Multidimensional Array
*/

// multidimensional array example...

$multi = array(
	'name'		=>	'Alex Mojum',
	'country'	=>	'America',
	'skills'	=>	array(
		'PHP', 
		'Laravel', 
		'WordPress', 
		'top_secrect' =>	array(
			'Ami', 
			'Tumi', 
			'She',
		),
	),
	'email'		=>	'Alex@gmail.com',
	'phone'		=>	array(
		'015744', '0152570', 'gf'	=>	array(
			'g234', 'ge3'
		),
	),
);

echo $multi['skills']['top_secrect'][2];

echo '<pre>';
print_r( $multi );
echo '</pre>';


echo '<hr/>';

// associative array example..
$my_assoc = array(
	'name'		=>	'Alex Mojum',
	'age'		=>	12,
	'country'	=>	'America',
	'phone'		=>	'0167111252',
	3			=>	'Three',
);

$my_assoc[6] 	=	2500;
$my_assoc[] 	=	3000;


echo $my_assoc['country'];
echo $my_assoc[3];

echo '<br/>';

echo '<pre>';
print_r( $my_assoc );
echo '</pre>';

echo '<hr/>';

// index array example....
$my_array = array(
	'Mango', 'Bannana', 'Orange', 'Bangladesh'
);

$my_array[] = 'My New  Value';
$my_array['pc'] = 'Mac Book';

echo count($my_array);
echo '<br/>';


echo $my_array[0];
echo '<br/>';
echo $my_array[3];

// echo $my_array; // will show error message

echo '<pre>';
print_r( $my_array );
echo '</pre>';


echo '<hr/>';

// float data type
$price = 12.50;
echo $price;
echo gettype($price);

echo '<hr/>';


// boolean
$ami_vat_kheyesi = true;
$ami_ekhone_americay = false;

echo $ami_ekhone_americay;
echo '<br/>';
echo $ami_vat_kheyesi;

echo gettype( $ami_vat_kheyesi );
echo '<hr/>';

// integer data type
$my_number = 12;
echo $my_number;
echo '<br/>';
echo gettype( $my_number );


echo '<hr/>';

/*
PHP DATA TYPE
===================================
1. integer 			=	1 15 20 255
2. boolean 			=	true false	
3. float 			=	1.5 25.5 6.6
4. array 			=	array()
5. object 	        =	class name {} $object = new name;
6. null 			=	null	
7. resource         =   	
*/

echo '<hr/>';


$hello = 'My Hello';

// now doc style variable
$now_doc =  <<<'NDOC'
$hello
<iframe width="560" height="315" src="https://www.youtube.com/embed/AGBjI0x9VbM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
NDOC;

echo $now_doc;


echo '<hr/>';


// here doc style variable
$you_tube = <<<YOUTUBE
<iframe width="560" height="315" src="https://www.youtube.com/embed/AGBjI0x9VbM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
YOUTUBE;

echo $you_tube;


echo '<hr/>';

$my_value = 'Alexender';

// here doc style variable
$my_form = <<<FORM
$my_value
<table>
	<tr>
		<td>Username</td>
		<td><input type="text"></td>
	</tr>
	<tr>
		<td><input type="button" value="Send"></td>
	</tr>
</table>
FORM;

echo $my_form;

echo '<hr/>';

$here_doc = <<<SAKIB
APNI 
JA 
KISU 
LIKHEN
SAKIB;

echo $here_doc;

echo '<hr/>';


// normal variable 
$name 	=	'Alex Mojum'; // string data type
$title 	=	'Your name is '; // string data type
$_age 	=	28; // integer
$_age_2 =	29; // integer


// joined / concate (.) dot sign
echo $title . $name .' '. $_age .' '. $_age_2;
echo '<hr/>';
echo "$title  $name";
echo '<hr/>';
echo '$title  $name'; // ''


// "" string....
?>
	
</body>
</html>