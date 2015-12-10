<?php

 $name = $_POST['name'];
 $location = $_POST['location'];
 $language = $_POST['language'];
 $comment = $_POST['comment'];

?>

<html>
	<body>
		<h2><u>Submtited Information</u></h2>
		<ul>
			<li>Your name is: <?= $name?></li>
			<li>Dojo location: <?= $location?></li>
			<li>Your Favorite Language is: <?= $language?></li>
			<li>Your comment: <?= $comment ?></li>
		</ul>
			<a href="/simple%20test/">Go Back</a>
	</body>
</html>