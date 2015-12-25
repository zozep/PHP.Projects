<?php
/*
There are 2 keys in this array: first_name, last_name
The value in the key 'first_name' is 'Michael'.
The value in the key 'last_name' is 'Choi'.
*/
$users['first_name'] = 'Michael';
$users['last_name']  = 'Choi';

echo "There are 2 keys in this array: {$users['first_name']}, and {$users['last_name']}. <br/>";	

foreach($users as $key => $value){
	echo "The value in the key {$key} is {$value}. <br/>";
}

?>