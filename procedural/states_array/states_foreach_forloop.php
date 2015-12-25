<?php
/*
Display a dropdown menu in HTML (using select tag and option tag) that displays the different states. 
Create this dropdown menu using for loops. Create another identical dropdown menu but, this time, use foreach statement.
Once you're done with above exercise, insert three new states in the array $states: 'NJ', 'NY', 'DE'. 
Display a new dropdown menu with the eight unique states.

Your output should have three dropdown menus.
*/

$states1 = array('wa','ca','md','co','nd');
$states2 = array('ny','nj','de');

?>
<!doctype html>
<head>
	<title>dropdown php</title>
</head>

<body>
<select>
	<?php
		for($i = 0; $i < 5; $i++){
			echo '<option>'. $states1[$i]. '</option>';
		}
	?>
</select>

<select>
	<?php
		foreach($states1 as $foo){
			echo '<option>'. $foo. '</option>';
		}
	?>
</select>

<select>
	<?php
		foreach($states2 as $bar){
			echo '<option>'. $bar. '</option>';
		}
	?>
</select>

</body>
</html>