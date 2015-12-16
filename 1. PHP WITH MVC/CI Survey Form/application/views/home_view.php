<html>
<head>
	<title>document</title>
</head>
<body>
	<form action="/result" method="post">
		<label>Your Name: </label>
		<input type="text" name="name" required> <br>
		
		<label>Dojo Location: </label>
		<select name="location" required>
			<option value="mountain view">Mountain View</option>
			<option value="seattle">Seattle</option>
		</select><br>

		<label>Favorite Language: </label>
		<select name="language" required>
			<option value="php">PHP</option>
			<option value="javascript">javascript</option>
			<option value="ruby">Ruby</option>
		</select><br><br>

		<label><u>Comment (Optional)</u> :</label> <br>
		<textarea name="comment" cols="30" rows="10"></textarea><br><br>
		<input type="submit" value="submit">
	</form>
</body>
</html>