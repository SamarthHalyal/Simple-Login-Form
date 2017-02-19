<?php

$connection = mysqli_connect("{your-localhost}","{your-database-username}","your-database-password") or die("connection failed");
$db = mysqli_select_db($connection,"mac") or die("database missing");
$query = "SELECT * FROM Mydatabase";
$result = mysqli_query($connection,$query);
$status = 0;

while($row = mysqli_fetch_array($result)) {
if(($_REQUEST["userid"] == $row['userid']) && ($_REQUEST["password"] == $row['password'])){
	$status = 1;
  	header('Location: Website.php');
  }
}
if($status == 0){
header("Location: Login.php");
}
mysqli_close($connection) or die("could not close connection");

?>