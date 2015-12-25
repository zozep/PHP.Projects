<?php

function print_lists($array){
	for($i = 0; $i < count($array); $i++){
		echo '<li>'. $array[$i] .'</li>';
	}
	return;
}

$sample = array(1,2,3,4,5,6,7,8,9,10);
print_lists($sample);

?>