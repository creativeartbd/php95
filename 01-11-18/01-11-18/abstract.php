<?php

abstract class Database {

	public $host;
	public $user;
	public $pass;
	public $db;

	abstract public function connection ($arg, $arg1);

	public function test () {
		echo ' no abstract function'
	}
	
}

class Admin extends Database {

	// concrete functon....
	public function connection ($arg, $arg1) {
		echo 'My admin method';
	}
}

$admin = new Admin;
$admin->connection(1, 2);