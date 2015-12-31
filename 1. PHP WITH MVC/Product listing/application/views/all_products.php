<html>
<head>
	<title>Products</title>
</head>

<body>
<h2> Trader's Store: </h2>

<table border="1" style="width:100%">
	<legend>Product Listing:</legend><br>

	<tr>
		<td>Manufacturer</td>
		<td>Product Name</td>
		<td>Price ($)</td>
		<td>Date Added</td>
		<td>Actions</td>
	</tr>
	<?php foreach ($products as $product) { ?>
	<tr>
		<td><?= $product['manufacturer'] ?></td>
		<td><?= $product['name'] ?></td>
		<td><?= $product['price'] ?></td>
		<td><?= $product['created_at'] ?></td>
		<td>
			<a href="/products/edit/<?= $product['id'] ?>">Edit</a>
			<a href="/products/delete/<?= $product['id'] ?>">Delete</a>
		</td>		
	</tr>
	<?php } ?>
</table>

<br>

<form>
	<fieldset>
		<legend>Add a product: </legend><br>

		<Label>Manufacturer/Brand: </label>
		<input type="text" name="manufacturer"><br>

		<Label>Product Name: </label>
		<input type="text" name="name"><br>

		<Label>Price ($): </label>
		<input type="text" name="price"><br>

		<Label>Description: </label>
		<textarea rows="5" cols="30"></textarea>

		<input type="submit" value="Add">	
	</fieldset>
</form>

</body>
</html>