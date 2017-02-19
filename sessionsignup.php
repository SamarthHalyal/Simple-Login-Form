<?php
$connection = mysqli_connect("{your-localhost}","{your-database-username}","your-database-password") or die("connection failed");
$db = mysqli_select_db($connection,"mac") or die("database missing");
$query="INSERT INTO Mydatabase (userid,password) VALUES (\"" . $_REQUEST["userid"]. "\",\"" . $_REQUEST["password"] . "\")";

$result = mysqli_query($connection,$query);

header('Location: Website.php');

mysqli_close($connection);
?>