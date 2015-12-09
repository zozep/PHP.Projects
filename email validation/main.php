<?php

require_once('connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>QuotingDojo</title>
	<link rel="styleshset" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>
	<div id="container">
		<h1>here are the awesome quotes!</h1>
		<?php

		$getall = "SELECT * FROM names";

		$data = fetch_all($getall);

		foreach($data as $key => $value) {
				echo '&ldquo;' . $value['quote'] . '&rdquo; <br/>
				-' . $value['name'] . ' at ' . $value['created_at'] . '<br/><hr/><br/><br/>';
			}
		?>
	</div>
</body>
</html>
