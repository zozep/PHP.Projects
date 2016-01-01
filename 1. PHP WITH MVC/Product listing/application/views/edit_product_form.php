<html>
<head>
	<title>edit product</title>
</head>
<body>
	<form method="post" action="/products/update/<?= $id ?>" <br>
		<label>Name:</label> <input name="name"><br>
		<label> Description:</label> <input name="description"><br>
		<label> Price:</label> <input name="price"><br>
		<br>
		<input type="submit" value="Update">
	</form>
		<tbody>
	<a href="/products">Go to Product Listing</a>
</body>
</html>