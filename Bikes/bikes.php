<?php

Class Bike{
	public $price, $max_speed, $miles;

	public function __construct($price, $max_speed){
		$this->price = $price;
		$this->max_speed = $max_speed;
		$this->miles = 0;
	}
}

$bmx = new Bike(250, "20mph");
echo $bmx-> price . "<br>"; //250 
echo $bmx-> max_speed. "<br>"; //20mph
echo $bmx-> miles. "<br>"; //0

	public function display_info(){
		echo "Price: " . $this->price. "<br>";
		echo "Maximum Speed: ".$this->max_speed. "<br>";
		echo "Miles ridden: ".$this->miles. "<br><br>";
	}
 
	public function drive(){
		$this-> miles+=10;
		echo "Driving" . $this->miles. "<br>";
		return $this;
	}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  kkkkkkkk                                                                                                                                                                    fffof                                             ffffffffooo
	public function reverse(){
		$this->miles-=5;
		echo "Reversing" . $this->miles. "<br>";
		return $this;
		if($this->miles<5){
			$this->miles=0;
		}
		return $this;
	}
}

?>