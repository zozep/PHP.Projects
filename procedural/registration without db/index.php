<?php session_start(); ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>registration without db</title>
</head>
<body>
<?php
	if(isset($_SESSION['errors'])){
		foreach($_SESSION['errors'] as $error){
			echo $error;
		}
	}
?> 
	<form action="process.php" method="post" enctype ="multipart/form-data" accept-charset="utf-8">
		<input type="hidden" name="action" value="Register"/>
		<label for="first_name">First Name: </label>
		<input type="text" name="first_name" placeholder="Enter your first name"> </br>
		
		<label for="last_name">Last Name: </label>
		<input type="text" name="last_name" placeholder="Enter your last name"> </br>
		
		<label for="Email">Email: </label>
		<input type="text" name="email" placeholder="youremail@domain.com"> </br>
		
		<label for="password">Password: </label>
		<input type="password" name="password" placeholder="Enter a password"> </br>

		<label for="confirm_password">Confirm Password: </label>
		<input type="password" name="confirm_password"> </br>

		<label for="birthdate">Birth Date: </label>
		<input type="text" name="birthdate" placeholder="MM/DD/YY"> </br>

		<label for="profile_picture">Profile Picture </label>
		<input type="file" name="profile_picture"> </br>
		
		<input type="submit" value="Register"> </br>
	</form>

<?php 
	$_SESSION['errors'] = array();
	session_destroy(); 
?>

</body>
</html>