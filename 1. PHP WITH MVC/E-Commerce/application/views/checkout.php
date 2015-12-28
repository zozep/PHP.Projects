<html>
<head>
	<title>edit product</title>
</head>
<body>
	<form method="post" action="/products/update/<?= $id ?>" <br>
		<label>Description: </label> <input name="description"><br>
		<label> Price:</label> <input name="price"><br>
		
		<select name="buy">
    	<?php for ($i = 1; $i <= 99; $i++) : ?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
    	<?php endfor; ?>
		</select>

		<input type="submit" value="submit">
	</form>
		<tbody>
	<a href="/products">Go back</a>
</body>
</html>