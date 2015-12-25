<?php

Class Bike{
	public $price, $max_speed, $miles;

	public function __construct($price, $max_speed){
		$this -> price = $price;
		$this -> max_speed = $max_speed;
		$this -> miles = 0;
	}

	public function display_info(){
		echo "Price: " . $this->price. "<br>" .
		 	 "Max Speed: ".$this->max_speed. "<br>" .
		 	 "Miles ridden: ".$this->miles. "<br><br>";
	}

	public function drive(){
		echo "Driving" . "<br>" . $this->miles. "<br>";
		$this -> miles += 10;
		return $this;
	}

	public function reverse(){
		echo "Reversing" . "<br>" . $this->miles . "<br>";

		if($this-> miles < 6){
			$this-> miles = 0;
		}else{
			$this-> miles -= 5;
		}
		return $this;
	}
}
echo "<h3>BMX1</h3>";
$bmx1 = new Bike(100, "10 mph");
$bmx1->drive()->drive()->drive()->reverse()->display_info();
echo "<h3>BMX2</h3>";
$bmx2 = new Bike(200, "20 mph");
$bmx2->drive()->drive()->reverse()->reverse()->display_info();
echo "<h3>BMX3</h3>";
$bmx3 = new Bike(300, "30 mph");
$bmx3->reverse()->reverse()->reverse()->reverse()->display_info();
?>