<?php 
session_start();
echo "hello {$_SESSION['first_name']}!<br>";
?>
<a href='/login%20and%20registration'><button>Log Off!</button></a>