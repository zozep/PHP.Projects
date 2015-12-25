<?php
session_start();
require_once("connection.php");
?>
<html>
<head>
	<title></title>
</head>
<body>
	<!--log out button -->
	<form action="process.php" method="post">
		<input type="hidden" name="action" value="logout">
		<input type="submit" value="Log out">
	</form>

	<h2>Welcome, <?= $_SESSION['username'] ?></h2>

	<h2>Post a message</h2>
	<form aciton="process.php" method="post">
		<input type="hidden" name="action" value="post_message">
		<textarea cols="40" rows="10" name="message"></textarea>
		<input type="submit" value="Post">
	</form>

	<?php
		$get_all_messages = "SELECT messages.id, messages.messsage, users.first_name, users.last_name, messages.created_at 
			FROM messages JOIN users ON users.id = messages.user_id ORDER BY messages.id DESC";
		
		$get_all_comments ="SELECT comments.comment, comments.created_at, comments.message_id, users.first_name, users.last_name 
			FROM comments JOIN users ON users.id = comments.user_id";

		$messages = fetch_all($get_all_messages);
		$comments = fetch_all($get_all_comments);
		
		//print all messages
		foreach($messages as $value){
			echo "<div class= 'message'><p>" . $value['message'] . "</p></div>"
			echo "<p> By"  . $value['first_name'] . " " . $value['last_name'] . "</p></div>";

			//under each message, loop through the $comments array and print out each comment
			foreach($comments as $value2){
				if($value2['message_id'] == $value['id']){
					echo "<p>" . $value2['comment'] . "</p>";
					echo "<p>commented by " . $value2['first_name'] . " " . $value2['last_name'] . "</p>";
				}
			}
	
	?>

	<h3>Post a comment</h3>
	<form aciton="process.php" method="post">
		<input type="hidden" name="message_id" value="<?= $value['id'] ?>">
		<input type="hidden" name="action" value="post_comment">
		<textarea cols="40" rows="10" name="comment"></textarea>
		<input type="submit" value="Post">
	</form>

	<?php
		}
</body>
</html>
