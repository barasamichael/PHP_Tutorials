<?php
class UserModel
{
	private $pdo;

	function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	function getUsers()
	{
		$stmt = $this->pdo->query('SELECT * FROM users');
		
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	function addUser($name, $email)
	{
		$stmt = $this->pdo->prepare(
			'INSERT INTO users (name, email) VALUES (:name, :email)');
		$stmt->execute(['name'=>$name, 'email'=>$email]);

		return $this->pdo->lastInsertId();
	}

	function deleteUser($id)
	{
		$stmt = $this->pdo->prepare('DELETE FROM users WHERE id = :id');
		$stmt->execute(['id'=>$id]);
	}
}
?>
