<?php

/*
require
require_once
include
include_once

*/

spl_autoload_register(function($class) {
	require strtolower($class).'.php';
});

$a = new A;
$b = new B;
$c = new C;
$d = new D;


$name = 'I LOVE MY COUNTRY';

echo $name;

echo '<hr/>';

echo strtolower($name);