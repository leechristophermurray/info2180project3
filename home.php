<? php
//===========================================================================================================
//											Storage of data
//===========================================================================================================
$errors = array();
$data = array();

//Validating data
if( empty($_POST['To']) )
	$errors['To'] = 'Please specify recipient';

if( empty($_POST['Subject']) )
	$errors['Subject'] = 'You did not specify a subject, do so';
	exit();

if( empty($_POST['Body']) )
	$errors['Body'] = 'There is no body in this email';
	exit();

if( empty(errors) === true ) {
	$deal = Deal($_POST['To'], $_POST['Subject'], $_POST['Body']);
	exit();

	if($deal === true) {
		echo "SUCESS, doncha wish u were admin";
	}
	else {
		echo "FAILURE, internal error (it means the syatem is jacked)";
		exit();
	}
}
else {
	echo "Something is Missing!!. YOU SHOULD FIX THAT. :P";
	exit();
}

//===========================================================================================================
//											Talks to database 
//===========================================================================================================
//create a database connection
$server = "localhost";
$user = "username";
$password = "password";

$conn = new mysql_data($server, $user, $password);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

echo "Connected... we run this";

// validates data
function Deal(email, subject, body) {
//Execute sql function save to a variable and return


?>
