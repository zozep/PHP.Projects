<html>
<head>
	<title>e-commerce</title>
</head>

<body>
<h2>Products</h2>

<table>
	<tr>
		<td><b>Description</b></td>
		<td><b>Price</b></td>		
		<td><b>Quantity</b></td>
		<td></td>
	</tr>
	<?php foreach ($products as $product) { ?>
		<tr>
		<td><?= $product['description'] ?> </td>
		<td><?= $product['price'] ?> </td>		
		<td><?= $product['quantity'] ?> </td>
		<td>
			<a href="/products/show/<?= $product['id'] ?>">Buy</a>
		</td>		
	</tr>
	<?php } ?>
</table>
</body>
</html>