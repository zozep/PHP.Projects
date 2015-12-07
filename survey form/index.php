<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Survey Form PHP</title>
        <meta name="description" content="This is a survey Form">
        <link rel="stylesheet" href="xyz" media="screen">
    </head>

<body>
<form action="result.php" method = "post">
	<h2> Your name:</h2>
	<input name="name" type="text">

	<h2>Dojo Location:</h2>
	<input name="location" type="text">

	<h2>Favorite Language:</h2>
	<select name="language">
		<option value="python">python</option>
		<option value="javascript">javascript</option>
		<option value="php">php</option>
	</select>
	<br>

	<h2>Comment (optional):</h2>
	<textarea name="comment"></textarea>
	<input value="submit" type="submit">
	<br>	
</form>
</body>
</html>