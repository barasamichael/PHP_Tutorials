<!DOCTYPE html>
<html>
	<head>
		<title>User Profile</title>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
	</head>
	<body>
		<h1>User Profile</h1>
		<?php if (isset($_SESSION['user_id'])):?>
		<p>
		Welcome, User!
		<a href = "controller/logout.php">
			Logout
		</a>
		</p>
		<ul>
			<?php foreach ($users as $user):?>
			<li>
				<?php echo $user['name'];?>
			</li>
			<?php endforeach; ?>
		</ul>
		<?php else: ?>
		<p>
		You must be logged in to view this page.
		<a href = "controller/login.php">
			Login
		</a>
		</p>
		<?php endif; ?>
	</body>
</html>
