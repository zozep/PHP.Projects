<html>
<head>
	<title>new product</title>
</head>
<body>
	<form method="post" action="products/update/<?= {'product['id']'} ?>") ?>"><br>
		<label>Name:</label> <input name="name"><br>
		<label> Description:</label> <input name="description"><br>
		<label> Price:</label> <input name="price"><br>
		<br>
		<input type="submit" value="Create">
	</form>
	<a href="/products">Go back</a>
</body>
</html>