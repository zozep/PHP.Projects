<?php

 $name = $_POST['name'];
 $location = $_POST['location'];
 $language = $_POST['language'];
 $comment = $_POST['comment'];

?>

<html>
	<body>
		<h1><u>Submitted Information</u></h1>
			<ul>
				<li>Name: <?= $name?></li>
				<li>Dojo Location: <?= $location?></li>
				<li>Favorite Language: <?= $language?></li>
				<li>Comment: <?= $comment?></li>
			</ul>
				<a href="/survey%20form/">Go Back</a>
	</body>
</html>