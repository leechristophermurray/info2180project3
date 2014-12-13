<?php 
session_start();
session_destroy();
$form = $_POST;


try {
	$db = new PDO("mysql:dbname=test;","root", "");
	$statement = $db->prepare("SELECT * FROM users WHERE username = ?");
	$statement->execute(array($form['username']));
	$row = $statement->fetch();
	if ($row) {
		if ($form['password'] == $row['password']){
			session_start();
			$_SESSION['id'] = $row['id'];
			$_SESSION['username'] = $form['username'];
			$_SESSION['password'] = $form['password'];
			header('Location: mail.php');
		} else {
			echo "Incorrect Password";
		}
	} else {
		echo "Invalid username";
	}

} catch (PDOEXception $e){
	echo "Connection failed:" . $e->getMessage();
}

?>