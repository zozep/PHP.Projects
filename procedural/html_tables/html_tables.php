<?php 
$users = array( 
   array('first_name' => 'Michael', 'last_name' => 'Choi'),
   array('first_name' => 'John', 'last_name' => 'Supsupin'),
   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
   array('first_name' => 'KB', 'last_name' => 'Tonel') 
);

?>

<html>
<head>
	<title>html tables</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body>
	<table class="table">
		<thead>
			<th>User #</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Full Name</th>
			<th>Full Name in upper case</th>
			<th>Length of full name(without spaces)</th>
		</thead>
		<tbody>
			<?php
				for($i = 0; $i < count($users); $i++){ 
					$fullname = $users[$i]['first_name'] . ' ' . $users[$i]['last_name'];
					$fullnamecaps = strtoupper($fullname);
					$stringlength = strlen( 
						trim($users[$i]['first_name'], " ") 
						.
						trim($users[$i]['last_name'], " ") 
					);
					?> 

					<tr>
						<td><?= $i + 1 ?></td>
						<td><?= $users[$i]['first_name'] ?></td>
						<td><?= $users[$i]['last_name'] ?></td>
						<td><?= $fullname ?> </td>
						<td><?= $fullnamecaps ?> </td>
						<td><?= $stringlength ?> </td>
					</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>