<?php
session_start();
$flag = false;

if(!isset($_SESSION["rand"])){
	$_SESSION["rand"] = rand(1,100);
}

if(isset($_POST["answer"])){
	if($_POST["answer"] > $_SESSION["rand"]){
		echo "Too high!";
	}
	elseif($_POST["answer"] < $_SESSION["rand"]){
		echo "Too low!";
	}
	else{
		echo $_POST["answer"]. " was the answer!";
		$flag = true;
	}
}

if(isset($_POST["reset"])){ 
	session_destroy();
	session_unset();
	header("Refresh:0");
}
?>


<!DOCTYPE html>
<!--Create an site that when a user loads it creates a random number between 1-100 and stores the number in session. 
Allow the user to guess at the number and tell them when they are too high or too low.
 If they guess the correct number tell them and offer to play again.-->


<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>The Great Numbers game PHP</title>
        <meta name="description" content="This is a Great Numbers game">
    </head>

<body>
<form action="index.php" method = "post">
	<h2> Welcome to the Great Number Game!</h2>
	<p>I am thinking of a number between 1 and 100<p>
	<p> Take a guess!</p>
	<br>	
	<input name="answer" type="number">
	<input value="submit" type="submit">
</form>

<?php
	if($flag){ ?>
		<form action="index.php" method ="post">
			<input type="hidden" name="reset">
			<input value="Play again!" type="submit">
		</form>
	<?php 
	}
?>

</body>
</html>