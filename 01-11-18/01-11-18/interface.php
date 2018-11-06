<?php

interface myInterFace {

	public function getName();
}

interface MySecondInterface {

	public function getValue();
}	

class MyClass implements myInterFace, MySecondInterface {

	public function getName () {

	}

	public function getValue () {
		
	}
}