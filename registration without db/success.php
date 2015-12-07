<?php session_start();

	echo "Welcome, " . $_SESSION['first_name'] . "</br>"; ?>
	<img src="<?php echo $_SESSION['profile_picture']; ?>" alt="">

<? session_destroy(); ?>