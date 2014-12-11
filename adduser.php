<?php 

$form = $_POST;

$rules = array(
		"first_name" => "/.+/",
		"last_name" => "/.+/",
		"username" => "/.+/",
		"password" => "/^(?=.*[0-9])(?=.*[A-Z])([a-zA-Z0-9]{8,})$/"
	);

$validform = true;
foreach ($rules as $input => $rule) {
	if (! preg_match($rule, $form[$input])){
		$validform = false;
	}
}

if ($validform){
	try {
			$db = new PDO("mysql:dbname=test;", "root", "");
			$statement = $db->prepare("INSERT INTO users (first_name, last_name, password, username) values (:first_name, :last_name, :password, :username)");
			$statement->execute($form); //Execute prepared query with data
			header('Location: /homescreen.php')
		} catch (PDOException $e){
			echo "Connection failed: " . $e->getMessage();
		}

} else {
	header('Location: /adduser.html')
}
