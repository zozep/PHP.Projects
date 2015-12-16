<!DOCTYPE html>
<html>
<head>
	<title>Quests</title>
</head>
<body>
	<h1>List of Quests</h1>
	<table>
		<tr>
			<td>Name</td>
			<td>Quest</td>
			<td>Fav Color</td>
		</tr>
		<?php foreach ($quests as $quest) { ?>
			<tr>
				<td><?= $quest['name']?></td>
				<td><?= $quest['quest']?></td>
				<td><?= $quest['fav_color']?></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>