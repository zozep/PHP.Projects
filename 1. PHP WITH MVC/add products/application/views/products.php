<html>
<head>
	<title>products</title>
</head>

<body>
<h2>Add a product</h2>

<table>
	<tr>
		<td><b>Product Name</b></td>
		<td><b>Price ($)</b></td>
		<td><b>Description</b></td>		
	</tr>
	<?php foreach ($products as $product) { ?>
		<tr>
		<td><?= $product['name'] ?></td>
		<td><?= $product['price'] ?></td>
		<td><?= $product['description'] ?></td>		
		<td>
			<a href="/products/delete/<?= $product['id'] ?>"><button>Remove</button></a>
		</td>		
	</tr>
	<?php } ?>
</table>

<a href="/products/new"><br>Add a new Product</a>
</body>
</html>