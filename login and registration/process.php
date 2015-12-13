<?php
session_start();
require('connection.php');

if(isset($_POST['action']) && $_POST['action'] == 'register'){
	register_user($_POST);
}
if(isset($_POST['action']) && $_POST['action'] == 'login'){
	login_user($_POST);
}

function register_user($post) {
	$_SESSION['errors']= array();

	if(empty($post['first_name'])) { 
		$_SESSION['errors'][] = "first name can't be blank!";
	}
	if(empty($post['last_name'])) { 
		$_SESSION['errors'][] = "last name can't be blank!";
	}
	if($post['password'] !== $post['confirm_password']) {
		$_SESSION['errors'][] = "passwords need to match!";
	}
	header('location: index.php');
	exit();
}

	function login_user($post) {

	}

?>