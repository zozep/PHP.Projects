<html>
<head>
	<title>Random Word Generator</title>
</head>
<body>	
<?php if($this->session->userdata('attempt'))
		{ ?>
		<h3>Random Word (Attempt #: <?php echo $this->session->userdata('attempt'); ?> )</h3>
<?php  	} ?>
		<h1><?php echo $this->session->userdata('word'); ?></h1>
		<form action="/home/process_word" method="post">
			<input type="hidden" name="word" value="">
			<input type="submit" value="Generate">
		</form>
</body>
</html>