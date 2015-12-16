<!doctype html>
<html>
<head>
	<title>document</title>
</head>
<body>
	<div style="color: green; height: 30px">
		Thanks for submitting this form! You have submitted this form <?php echo $this->session->userdata('counter'); ?> time/s now.
	</div>

	<div id="body" style="font-family: sans-serif; border: 1pt solid black; width: 280px; height: 400px; padding: 15px;">
		<h2><u>Submitted information</u></h2>

		<h3>Name:</h3> <?php echo $survey_info['name']; ?>
		<h3>Dojo Location:</h3> <?php echo $survey_info['location']; ?>
		<h3>Favorite Language:</h3> <?php echo $survey_info['language']; ?>
		<h3>Comment:</h3> <?php echo $survey_info['comment']; ?>
		<br>
		<br>
		<a href="/home" class="button" style="border: 1pt solid black; border-radius: 5px; background-color: blue; padding: 2px; text-decoration: none; color: white; float: right;">Go Back</a>
	</div>
</body>
</html>