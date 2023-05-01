<!DOCTYPE html>
<html>
	<head>
		<title>User Management System</title>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
	</head>
	<body>
		<h1>User Management System</h1>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $user): ?>
				<tr>
					<td><?php echo $user['id']></td>
					<td><?php echo $user['name']></td>
					<td><?php echo $user['email']></td>
					<td>
						<a href = "index.php? action = delete&id=<?php echo $user['id'];?>">
							Delete
						</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<p>
		<a href = "index.php?action=add">
			Add User
		</a>
		</p>
	</body>
</html>
