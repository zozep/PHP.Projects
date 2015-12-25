<?php

?>

<!doctype html>
<html>
<head>
	<title>The wall</title>
	<meta charset="utf-8">
</head>
<body>
	<h2>Register</h2>
	<form action="process.php" method="post">
		<input type="hidden" name="action" value="register">
		<label>First Name:</label>
		<input type="text" name="first_name">

		<label>Last Name:</label>
		<input type="text" name="last_name">

		<label>Email:</label>
		<input type="email" name="email">

		<label>Password:</label>
		<input type="password" name="password">

		<label>Confirm Password:</label>
		<input type="password" name="confirm_password">

		<input type="submit" value="register">
	</form>


	<form action="process.php" method="post">
		<h2>Log in</h2>
		<input type="hidden" name="action" value="login">
		
		<label>Email:</label>
		<input type="email" name="email">

		<label>Password:</label>
		<input type="password" name="password">

		<input type="submit" value="register">
	</form>
</body>
</html>