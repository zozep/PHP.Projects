<?php

Class Car{
	public $price, $speed, $fuel, $mileage, $tax;

	public function __construct($price, $speed, $fuel, $mileage) {
		$this -> price = $price;
		$this -> speed = $speed;
		$this -> fuel =  $fuel;
		$this -> mileage = $mileage;
		$this -> tax = ($this -> price > 10000) ? "0.15" : "0.12";

		$this -> display_all();
	}

	public function display_all() {
		foreach($this as $key => $value) {
			echo $key . " : " . $value . "<br>";
		}
	}
}

echo "<h4>Car 1: </h4>";
$car1 = new Car(2000, "35 mph", "Full", "15 mpg");

echo "<h4>Car 2: </h4>";
$car2 = new Car(2000, "5 mph", "Not Full", "25 mpg");

echo "<h4>Car 3: </h4>";
$car3 = new Car(2000, "15 mph", "Full", "105 mpg");

echo "<h4>Car 4: </h4>";
$car4 = new Car(2000, "25 mph", "Kind of Full", "25 mpg");

echo "<h4>Car 5: </h4>";
$car5 = new Car(2000, "45 mph", "Empty", "25 mpg");

echo "<h4>Car 6: </h4>";
$car6 = new Car(20000000, "35 mph", "Empty", "15 mpg");
?>