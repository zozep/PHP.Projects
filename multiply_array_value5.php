<?php
/*
Create a function called 'multiply()' that reads each value in the array (e.g. $A = array(2, 4, 10, 16)) and returns an array where each value has been multiplied by 5.
Modify this function so that you can pass an additional argument to this function. 
The function should multiply each value in the array by this additional argument (call this additional argument 'factor' inside the function).
For example say $A = array(2,4,10,16). When you say 
$B = multiply($A, 5);  
var_dump($B);
this should dump B which contains [10, 20, 50, 80].
*/
function multiply($array){
	$array_sum = array();
	for($i = 0; $i < count($array); $i++){
		$array_sum[$i] = $array[$i]*5;
		echo($array_sum);
	}
}
$array = array(1,2,3,4,5);
multiply($array);
?>
