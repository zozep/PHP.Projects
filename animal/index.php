<?php

class Animal{
	var $name, $health;

	function __construct($name){
		$this-> health = 100;
		$this -> name = $name;
	}
	function walk(){
		$this -> health = $this -> health - 1;
		return $this;
	}
	function run(){
		$this -> health = $this -> health - 5;
		return $this;
	}
	function displayHealth(){
		echo "<br>Name: " . $this->name;
		echo "<br>Health: " . $this->health . "<br>";
	}
}
class Dog extends Animal{
	function __construct($name){
		parent :: __construct($name);
		$this-> health = 100;
	}

	function pet(){
		$this-> health = $this->health +5;
		return $this;
	}
}

class Dragon extends Animal{
	function __construct($name){
		parent :: __construct($name);
		$this-> health = 150; 
	}

	function fly(){
		$this->health = $this->health -10;
		return $this;
	}
	function displayHealth(){
		echo "<br> This is a dragon!";
		parent::displayHealth();
	}
}
$animal1 = new Animal("aa");
$animal1->walk()->run()->displayHealth();

$dog1 = new Dog("ab");
$dog1->walk()->run()->pet()->displayHealth();

$dragon1 = new Dragon("ac");
$dragon1->fly()->fly()->fly()->fly()->displayHealth();
?>

