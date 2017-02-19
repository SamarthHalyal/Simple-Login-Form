<!DOCTYPE html>
<html>
<head>
	<title>PASSIN</title>
	<link rel="stylesheet" href="Login.css" />
	<script src="https://www.gstatic.com/firebasejs/3.6.6/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBv-wthiY6Adamlbri8Dqho0LUJpAgDgps",
    authDomain: "mywebsiteproject-c7294.firebaseapp.com",
    databaseURL: "https://mywebsiteproject-c7294.firebaseio.com",
    storageBucket: "mywebsiteproject-c7294.appspot.com",
    messagingSenderId: "660912259825"
  };
  firebase.initializeApp(config);
</script>
</head>
<body>
<div class="wrapper">
<center>
<form action="sessionlogin.php" method="post" name="form1"> 
<table>
	<tr>
		<td>
		<h4>username : <input type="text" name="userid"></h4>
		</td>
		<td>
		<h4>password : <input type="password" name="password"></h4>
		</td>
		<td>
		<h4> <input type="submit" class="button" value="login" ></h4>
		</td>
	</tr>
</table>
</form>
<h6>Don't have an ID</h6>
<form action="signup.php" method="post">
	<table>
		<tr>
		<td>
		<h6><input type="submit" class="button" value="sign-up"></h6>
		</td>
		</tr>
	</table>
</form>
</div>
</center>
</body>
</html>