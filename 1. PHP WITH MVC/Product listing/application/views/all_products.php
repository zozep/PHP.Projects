<html>
<head>
	<title>Products</title>
</head>

<body>
<h2> Product Listing: </h2>

<table>
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

	<form action="/products/show/<?= $product['id'] ?>" method="post">
		<fieldset>
			<legend>Add a product: </legend>

			<Label>Manufacturer/Brand: </label>
			<input type="text" name="manufacturer">

			<Label>Product Name: </label>
			<input type="text" name="name">

			<Label>Price ($): </label>
			<input type="text" name="price">

			<input type="submit" value="Add">	
		</fieldset>
	</form>

</body>
</html>