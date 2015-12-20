<html>
<head>
	<title>semirestful</title>
</head>

<body>
<h2>Products</h2>

<table>
	<tr>
		<td><b>Name</b></td>
		<td><b>Description</b></td>		
		<td><b>Price</b></td>
		<td><b>Actions</b></td>
	</tr>
	<?php foreach ($products as $product) { ?>
		<tr>
		<td><?= $product['name'] ?></td>
		<td><?= $product['description'] ?></td>		
		<td><?= $product['price'] ?></td>
		<td>
			<a href="/products/show/<?= $product['id'] ?>">Show</a>
			<!-- <a href="/">edit</a> -->
			<a href="/products/delete/<?= $product['id'] ?>"><button>remove</button></a>
		</td>		
	</tr>
	<?php } ?>
</table>

<a href="/products/new"><br>Add a new Product</a>
</body>
</html>