<?php
//Part 1 Create a function called draw_stars() that takes an array of numbers and echo out  an asterisk, or '*'.

$x = array(4,6,1,3,5,7,25);

function draw_stars($array){
	for ($i = 0; $i < count($array); $i++){
		for($j = 1; $j <= $array[$i]; $j++){
			echo "*";
		} 
		echo "<br/>";
	}
}
draw_stars($x);

?>

<?php
//Part 2 Modify the function above. Allow an array, that contains integers and strings, to be passed to the draw_stars() function. When a string is passed, instead of displaying *, display the first letter of the string according to the example below.


$y = array(4,6,"tom",3,"bobby",7,25);

function draw_indexes($array){
	for ($i = 0; $i < count($array); $i++){
		if(is_numeric ($array[$i])){
			$letter = "*";
			$times = $array[$i];
		}
		elseif(is_string ($array[$i])){
			$letter = $array[$i][0];
			$times = strlen($array[$i]);
		}
		for($j = 1; $j <= $times; $j++){
			echo $letter;
		} 
		echo "<br/>";
	}
}
draw_indexes($y);
?>