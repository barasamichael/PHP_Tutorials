<?php
require_once('model/UserModel.php');

class UserController
{
	private $userModel;

	function __construct($pdo)
	{
		$this->userModel = new UserModel($pdo);
	}

	function index()
	{
		$users = $this->userModel->getUsers();
		include('view/index.php');
	}

	function add()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$name = $_POST['name'];
			$email = $_POST['email'];
			$id = $this->userModel->addUser($name, $email);

			header('Location:index.php');
		}
		else
		{
			include('view/add.php');
		}
	}

	function delete()
	{
		$id = $_GET['id'];
		$this->userModel->deleteUser($id);

		header('Location:index.php')
	}
}
?>
