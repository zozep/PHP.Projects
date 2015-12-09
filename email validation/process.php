<?php
session_start();
require_once('connection.php');

function validateEmails($emails){
	return(filter_var($emails, FILTER_VALIDATE_EMAIL)) ? true : false;
}

if(isset($_POST['action']) && $_POST['action'] == 'email-form'){
	if(empty($_POST['emails']))
		$_SESSION['error']['emails'] = 'Sorry, the email address field cannot be blank';

	else{
		$_SESSION['email_success']= validateEmail($_POST['emails']){

	if(!$_SESSION['email_success'])
		$_SESSION['error']['emails'] = 'The email address you entered (' . $_POST['emails'] . ') is NOT a valid email address!';
	else{
		$insert_email_query = "INSERT INTO users (emails, created_at) VALUES('". $_POST['email']."', NOW(), NOW())";
		$insert_email_result = mysql_query($inesrt_email_query);

		if($insert_email_result === true){
			$_SESSION['emails'] = $_POST['emails'];
			header('location: success.php');
			exit();
		}
		else{
			$_SESSION['error']['emails'] = "Something went wrong. Please check database connection.";
		}
	}
	header('location: main.php');
}

?>