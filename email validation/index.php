<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
	<title>email validation</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	if(isset($_SESSION['error'])){
		echo "error";

		foreach($_SESSION['error'] as $name => $message){
			echo "<p>". $message. "</p>";
		}
	}
	session_destroy();
	?>

	<form method="post" action="process.php">
		<input type ="hidden" name="action" value="email-form">
		<h3>Please enter your email address: </h3>
		<input name="email" type="text" placeholder="email address">
		<input name="submit" type="submit" value="submit">
	</form>
</body>
</html>