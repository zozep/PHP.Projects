<?php 
session_start();
$emails = $_SESSION['emails'];
$message = $_SESSION['message'];
?>
<html>
<head>
	<title>email validation with db</title>
</head>
<body>
	<div><p><?= $message?></p></div>
	<h1><u>Email addresses Entered:</u></h1>

<?php 
	for($i = 0; $i <count($emails); $i++){ ?>
		<span><?= $emails[$i]["email"]?></span>
		<span><?= $emails[$i]["created_at"]?></span><br>
<?php } ?>

</body>
</html>