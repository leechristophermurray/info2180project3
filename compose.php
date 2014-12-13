<?php require('redirect.php'); ?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/compose.css">
    
	<title>Cheapo-Mail</title>
</head>
<body>
	<form>
		<label for="subject">Subject: </label>
		<input id = "subject" type="text" name = "subject">
		<textarea id = "content" name="content">
			Enter Message here.
		</textarea><br>
		<label for="to">Recipients:</label>
			<?php 
				try {
					$db = new PDO("mysql:dbname=test;","root", "");
					$statement = $db->prepare("SELECT * FROM users");
					$statement->execute();
					$rows = $statement->fetchAll();
					foreach ($rows as $row) {
						echo $row['username'] . ": <input type = 'checkbox' name = 'recipients' value = '" . $row['id'] . "'>";
					}
				} catch (PDOException $e){
					echo $e->getMessage();
				}
 			?>
 		<input type="submit" value = "SEND">
	</form>
	<span id="sent"></span>
    <script type = "text/javascript" src="js/jquery-2.1.1.js"></script>
	<script type = "text/javascript" src = "js/compose.js"></script>
</body>
</html>