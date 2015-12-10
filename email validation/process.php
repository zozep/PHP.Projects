<?php
session_start();
require('connection.php');


$email = escape_this_string($_POST['email']);
$query = "INSERT INTO emails (email, created_at) VALUES ('". $email . "', NOW())";
$allquery ="SELECT * FROM emails";

if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
	run_mysql_query($query);
	$emails = fetch_all($allquery);
	$_SESSION['emails'] = $emails;
	$_SESSION['message'] = "The email address you entered ". $email . " is a VALID email address! Thank you!";
	header('Location: success.php');
}
else{
	header('Location: index.php');
}

?>