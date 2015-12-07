<?php
session_start();

if(isset($_POST['farm'])){
	$rand= rand(10,20);
	$_SESSION["gold"]+= $rand;
	array_push($_SESSION["activities"], "You entered a farm and earned $rand golds ". date("F j Y g:i a")."</br>");
}
elseif(isset($_POST['cave'])){
	$rand = rand(5,10);
	$_SESSION["gold"]+= $rand;
	array_push($_SESSION["activities"], "You entered a cave and earned $rand golds ". date("F j Y g:i a")."</br>");
}
elseif(isset($_POST['house'])){
	$rand= rand(2,5);
	$_SESSION["gold"]+= $rand;
	array_push($_SESSION["activities"], "You entered a house and earned $rand golds ". date("F j Y g:i a")."</br>");
}
elseif(isset($_POST['casino'])){
	$rand= rand(-50,50);
	$_SESSION["gold"]+= $rand;
	if($rand < 0){
		array_push($_SESSION["activities"], "You entered a casino and lost $rand golds ...OUCH.. ". date("F j Y g:i a")."</br>");
	}
	else{
		array_push($_SESSION["activities"], "You entered a casino and earned $rand golds ". date("F j Y g:i a")."</br>");
	}
}

header("Location: http://localhost:8888/Ninja%20Gold/");

?>