<?php 
session_start();
if ( $_SESSION['username'] != 'Admin') {
	header('Location: Index.php');
} 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Options</title>
	<link rel="stylesheet" type="text/css" href="style/admin.css"/>
</head>
<body>
	<h1>Welcome Admin!</h1>
	<div id="navBar">
		<ul>
			<a href="index.php"><div id="logout">Logout</div></a>
		</ul>
	</div>
	<div id="formSpace">
		<form action="adduser.php" method = "post" onsubmit= "return validateForm();">
			<label for="first_name">First Name:</label>
			<input class = "adduserinput" type="text" id="first_name" name="first_name">
			<label for="last_name">Last Name:</label>
			<input class = "adduserinput" type="text" id="last_name" name="last_name">
			<label for="username">Username:</label>
			<input class = "adduserinput" type="text" id="username" name = "username">	
			<label for="password">Password:</label>
			<input class = "adduserinput" type="text" id="password" name = "password">
			<input type="submit">
		</form>
	</div>
	<span id="error"></span>
	<script type = "text/javascript" src = "js/adduser.js"></script>
</body>
</html>