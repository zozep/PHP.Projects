<html>
<head>
	<title>Courses</title>
</head>
<body>
	<h2>Are you sure you want to delete the following course?</h2>
	<h3>Name: <?= $course['name'] ?></h3>
	<h3>Description: <?= $course['description'] ?></h3> 
	<a href="/">No</a>
	<a href="/courses/destroy/<?= $course['id'] ?>">Yes</a>
</body>
</html>