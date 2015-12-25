<?php
/*
Create a function get_max_and_min() that takes an array of numbers and, then,
returns both the minimum and the maximum number from the given array as an associative array. 
Do not use the PHP function max() or min() to get this to work. 
See if you can do this using arrays and for loops! For example:

$sample = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02); 
$output = get_max_and_min($sample); 
var_dump($output); 
$output should be equal to array('max' => 332, 'min' => 1.02);
*/
// $sample = array(135, 2.4, 2.67, 1.23, 332, 1.02);
// $output = get_max_and_min($sample);

function get_max_and_min($array){
	$max = $array[0];
	$min = $array[0];
 
	for($i = 0; $i < count($array); $i++) {
		if($array[$i]>$max)
		{
			$max = $array[$i];
		}
		elseif($array[$i] < $min)
		{
			$min = $array[$i];
		}
	}
	$new_array = array("max" => $max, "min" => $min);
	var_dump($new_array);
}
$array1 = array(56733, 8, 0, -5, 100000);
$array_to = array(1,2,3,4,5,6);
get_max_and_min($array_to);
get_max_and_min($array1);
?>