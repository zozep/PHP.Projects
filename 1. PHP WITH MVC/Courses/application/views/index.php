<html>
<head>
	<title>Courses</title>
</head>
<body>
	<h1>Add a new course</h1>
	<form method="post" action="/courses">
	<h3>Name: <input type="text" name="name">
	<h3>Description: </h3><textarea name="description"></textarea>
	</form>

	<h1>courses</h1>
	<table>
		<thead>
			<th>Course Name</th>
			<th>Description</th>
			<th>Date Added</th>
			<th>Actions</th>
		</thead>
		<tbody>
			<?php for($i=0; $i < count($courses); $i++){ ?>
				<tr>
					<td><?= $courses[$i]['name'] ?></td>
					<td><?= $courses[$i]['description'] ?></td>
					<td><?= $courses[$i]['created_at'] ?></td>
					<td><a href="/courses/delete/<?= $courses[$i]['id'] ?>">Delete</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>