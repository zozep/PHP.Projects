<?php

require_once('connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>email validations</title>
	<link rel="styleshset" type="text/css" href="style.css">
	<meta charset="utf-8">
</head>
<body>
		<h1>The emails you entered are:</h1>
		<?php

		$getall = "SELECT * FROM emails";

		$data = fetch_all($getall);

		foreach($data as $key => $value) {
				echo '&ldquo;' . $value['emails'] . '&rdquo; <br/>
				-' . $value['emails'] . ' at ' . $value['created_at'] . '<br/><hr/><br/><br/>';
			}
		?>
</body>
</html>
