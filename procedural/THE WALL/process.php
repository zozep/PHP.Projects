<?php
session_start();
require_once("connection.php");
if(isset($_POST['action']) && $_POST['action'] == "register") {

//register

	$insert_query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at) 
		VALUES ('{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['email']}', '{$_POST['password']}', NOW(), NOW())";

	//validations
	run_mysql_query($insert_query);
	header('Location: index.php');
}
//end of register

//login
if(isset($_POST['action']) && $_POST['action'] == "login") {
	$login_query = "SELECT * FROM users WHERE email = '{$_POST['email']}' AND password = '{$_POST['password']}'";

	$user = fetch_record($login_query);

	$_SESSION['user_id'] = $user['id'];
	$_SESSION['username'] = $user['first_name']. " " . $user['last_name'];

	header("Location: success.php"); 
}
//end of login



//log out
if(isset($_POST['action']) && $_POST['action'] == "logout"){
	session_destroy();
	header("Location: index.php");
}
//end of log out


//post message
if(isset($_POST['action']) && $_POST['action'] == "post_message"){
	$insert_message_query ="INSERT INTO messages (message, user_id, created_at, updated_at) 
		VALUES ('{$_POST['message']}', '{$_SESSION['user_id']}', NOW(), NOW())";

	run_mysql_query($insert_message_query);
	header("Location: success.php");
	exit();
}
//end of post message

//post comments
if(isset($_POST['action']) && $_POST['action'] == "post_comment"){
	$insert_comment_query = "INSERT INTO comments (comment, created_at, updated_at, user_id, message_id) 
		VALUES ('{$_POST['comment']}' , NOW(), NOW(), '{$_SESSION['user_id']}', '{$_POST['message_id']}')";
}
	run_mysql_query($insert_comment_query);
	header("Location: success.php");
}
//end of post comments
?>