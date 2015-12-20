<html>
<head>
	<title>semirestful</title>
</head>
<body>
	<h2>Product <?= $product['id'] ?> </h2>
		<p>Name: <?= $product['name'] ?> </p>
		<p>Description: <?= $product['description'] ?> </p>	
		<p>Price: <?= $product['price'] ?> </p>
		
	<a href="/">back</a>
	<a href="/products/edit/<?= $product['id'] ?>">edit</a>
</body>
</html>