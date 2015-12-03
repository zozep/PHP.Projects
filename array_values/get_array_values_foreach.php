<?php

function print_lists($array){
	foreach($array as $value){
		echo '<li>'. $value .'</li>';
	}
	return;
}

$sample = array(1,2,3,4,5,6,7,8,9,10);
print_lists($sample);

?>