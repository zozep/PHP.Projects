<html>
<head>
	<title>Success</title>
</head>

<body>
	<h2>welcome back, <?= $this->session->userdata('first_name') ?> </h2>

	<form>
		<input type="submit" value="Log Out">
	</form>
</body>
</html>