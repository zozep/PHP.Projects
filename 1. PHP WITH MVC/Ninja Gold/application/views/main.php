<html>
<head>
	<title>Ninja Gold</title>
</head>
<body>
	<h2>Your gold:</h2> <input name="total_gold" type="text" value=<?= $this->session->userdata("gold") ?>>

	<div>
		<h3>Farm</h3>
		<p>(earns 10-20 golds)</p>
		<a href="/Gold/farm">Find Gold!</a>
	</div>
	<div>
		<h3>Cave</h3>
		<p>(earns 5-10 golds)</p>
		<a href="/Gold/cave">Find Gold!</a>
	</div>
	<div>
		<h3>House</h3>
		<p>(earns 2-5 golds)</p>
		<a href="/Gold/house">Find Gold!</a>
	</div>
	<div>
		<h3>Casino!</h3>
		<p>(earns/takes 0-50 golds)</p>
		<a href="/Gold/casino">Find Gold!</a>
	</div>

	<h3>Activities:</h3>
	<div style="overflow: scroll; border: 1px solid black; width: 500px; height: 200px;" >
		<?php 
			for($i= 0; $i<count($this->session->userdata("activities")); $i++){
				echo $this->session->userdata("activities")[$i];
			}
		?>
	</div>
</body>
</html>