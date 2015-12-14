<?php

class Animal{
	var $name, $health;

	function __construct($name){
		$this-> health = 100;
		$this -> name = $name;
	}
	function walk(){
		$this -> health = $this -> health - 1;
	}
	function run(){
		$this -> health = $this -> health - 5;
	}
	function displayHealth(){
		echo "<br>Name: " . $this->name;
		echo "<br>Health: " . $this->health . "<br>";
	}
}

class Dog extends Animal {
	function __construct($name){
		parent :: __construct($name);
		$this-> health = 150; 
	}

	function pet(){
		$this-> health = $this->health +5;
	}
}

class Dragon extends Animal{
	function __construct($name){
		parent :: __construct($name);
		$this-> health = 171; 
	}

	function fly(){
		$this->health = $this->health -10;
	}
	function displayHealth(){
		echo "<br> This is a dragon!";
		parent::displayHealth)();
	}
}


?>