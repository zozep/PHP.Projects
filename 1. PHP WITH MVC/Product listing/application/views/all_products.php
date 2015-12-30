<html>
<head>
	<title>Products</title>
</head>

<body>
	<form action="/products/create" method="post">
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
<fieldset>
	<legend>Product Listing:</legend>
	<table>
		<tr>
			<th>Product Name</th>
			<th>Price ($)</th>
			<th>Date Added</th>
			<th>Action</th>
		</tr>

		<?php foreach ($products as $product) { ?>
		<tr>
		<td><?= $product['name'] ?></td>
		<td><?= $product['price'] ?></td>
		<td><?= $product['updated_at'] ?></td>
		<td>
			<a href="/products/delete/<?= $product['id'] ?>">Delete</a>
		</td>		
		</tr>
		<?php } ?>
	</table>
</fieldset>

</body>
</html>