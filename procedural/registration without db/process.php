<?php session_start();

	if(isset($_POST['action']) && $_POST['action'] == "Register"){
		register_action();
	}

	function register_action(){
		$_SESSION['first_name'] = $_POST['first_name'];
		if(empty($_POST['first_name'])){
			$_SESSION['errors'][] = "First Name is required. </br>";
		}
		if(empty($_POST['last_name'])){
			$_SESSION['errors'][] = "Last Name is required. </br>";
		}
		if(empty($_POST['email'])){
			$_SESSION['errors'][] = "Email is required. </br>";
		}
		if(empty($_POST['password'])){
			$_SESSION['errors'][] = "Password is required. </br>";
		}

		else{
			if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
				$_SESSION['errors'][] = "Email is not valid </br>";
			}
			if($_POST['password'] != $_POST['confirm_password']){
				$_SESSION['errors'][] = "Passwords do not match </br>";
			}	
		}

		if($_FILES['profile_picture']['error'] == 0){
			$directory = "upload/";
			$file_name = $_FILES['profile_picture']['name'];
			$file_path = $directory.$file_name;

			if(!move_uploaded_file($_FILES['profile_picture']['tmp_name'], $file_path)){
				$_SESSION['errors'][] = $file_name . " could not be saved. </br>";
			}
			$_SESSION['profile_picture'] = $file_path;
		}

		if(!isset($_SESSION['errors']) or count($_SESSION['errors']) == 0){
			header('location: success.php');
		}
		else{
			header('location: index.php');
		}
		exit();
	}
?>