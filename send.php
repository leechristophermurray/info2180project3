<?php 
session_start();
$data = $_POST;
$userID = $_SESSION['id'];

$message = array('body' => $data['content'],
					'subject' => $data['subject'],
					'user_id' => $userID,
					'recipient_ids' => $data['recipients']);

try{
	$db = new PDO("mysql:dbname=test;","root", "");
	$statement = $db->prepare("INSERT INTO messages(body, subject, user_id, recipient_ids) values(:body, :subject, :user_id, :recipient_ids) ");
	$statement->execute($message);
	echo "SENT!";
} catch (PDOException $e){
	echo "FAILED";
}

?>