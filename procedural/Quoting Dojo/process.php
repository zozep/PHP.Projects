<?php
require_once('connection.php');

$query = "INSERT INTO names (name, quote, created_at, updated_at) VALUES ('{$_POST['name']}', '{$_POST['quote']}',NOW(), NOW())";

run_mysql_query($query);
header('location: main.php');

?>