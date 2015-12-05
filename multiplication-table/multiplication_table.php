<?php
/*
Create a program that displays a 9x9 multiplication table. 
Display every other row in different background color, with one row in light grey color, the other row in white color.
Make the font of the first row larger and make it bold. Similarly, style the first column so the font is larger and bold.
Spend up to 5-10 minutes to make this look pretty using CSS!

*/


?>
<html> 
<head>
	<title>multiplication talbe</title>

	<style type="text/css">
		* {
			padding: 0px auto;
			margin: 0px auto;
			border: 0px;
		}
		table {
			border-collapse: collapse;  
		}
		td, th {
			border: 1px solid black;
			width: 30px;
			height: 30px;
			text-align: center;
		}
		tr:nth-child(odd) td:not(:first-child) {
			background-color: #c6c6c6;
		}
		th, strong {
			font-size: 20px;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<th></th>
			<?php
				for ($i=1; $i <= 9; $i++){
					echo "<th>{$i}</th>";
				}
			?>
		</thead>
		<tbody>
			<?php
				for ($i = 1; $i <=9; $i++){
					echo "<tr><td><strong>{$i}</strong></td>";
					for($j = 1; $j <=9; $j++){
						echo "<td>" . $i*$j . "</td>";
					}
					echo "</tr>";
				}
			?>
		</tbody>			
	</table>
</body>
</html>