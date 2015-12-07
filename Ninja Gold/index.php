<?php
session_start();

if(!isset($_SESSION["gold"])){
	$_SESSION["gold"] = 0;
}

if(!isset($_SESSION["activities"])){
	$_SESSION["activities"] = [];

}
?>

<html>
<head>
	<title>Ninja Gold</title>
</head>
<body>
	<h2>Your gold:</h2> <input name="total_gold" type="text" value=<?= $_SESSION["gold"]?>>

	<div>
		<h3>Farm</h3>
		<p>(earns 10-20 golds)</p>
		<form action="process.php" method="post">
			<input type="hidden" name="farm">
			<button>Find gold!</button>
		</form>
	</div>
	<div>
		<h3>Cave</h3>
		<p>(earns 5-10 golds)</p>
		<form action="process.php" method="post">
			<input type="hidden" name="cave">
			<button>Find gold!</button>
		</form>
	</div>
	<div>
		<h3>House</h3>
		<p>(earns 2-5 golds)</p>
		<form action="process.php" method="post">
			<input type="hidden" name="house">
			<button>Find gold!</button>
		</form>
	</div>
	<div>
		<h3>Casino!</h3>
		<p>(earns/takes 0-50 golds)</p>
		<form action="process.php" method="post">
			<input type="hidden" name="casino">
			<button>Find gold!</button>
		</form>
	</div>

	<p>Activities:</p>
	<div style="overflow: scroll; border: 1px solid black; width: 550px; height: 200px;" >
		<?php 
			for($i= 0; $i<count($_SESSION["activities"]); $i++){
				echo $_SESSION["activities"][$i];
			}
		?>
	</div>
</body>
</html>