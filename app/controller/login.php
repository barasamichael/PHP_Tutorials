<?php
session_start();

if (isset($_POST['email']) && ($_POST['password']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	// connect to the database
	$db = new PDO('mysql:host = hostname', dbname = 'mydatabase', 'username',
		'password');

	// query the database for the user with the given email
	$stmt = $db->prepare(
		'SELECT id, password FROM users WHERE email = :email');
	$stmt->execute(array(':email=>$email'));
	$user = $stmt->fetch(PDO::FETCH_ASSOC);

	// Verify the users password
	if ($user && password_verify($password, $user['password']))
	{
		$_SESSION['user_id'] = $user['id'];
		header('Location:index.php');
		exit;
	}
	else
	{
		$error = "Invalid email or password";
	}
}
include ('../view/login.php');
?>
