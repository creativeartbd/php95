<?php

// functon showName declared
/*
$arg = argumet
*/
function showName ($arg) {

	echo 'My Name is:' . $arg;
}


// call the function and pass the parameter
showName('Mannan');

class ShowMyName {

	public function ShowName () {

	}

	public function skills ($arg) {
		print_r($arg);
	}
}

$object = new ShowMyName;
$object->skills(array(
	'php', 'mysql', 'javascript', 'laravel'
));

