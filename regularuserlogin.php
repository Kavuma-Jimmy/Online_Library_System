<?php
session_start();

// PDO Database Connection
$dsn = "mysql:host=localhost;dbname=onlinelibrarysystem;";
$conn = new PDO($dsn, 'root', '');


function clean($data)
{
	$record = htmlentities($data);
	$record = htmlspecialchars($data);
	return $record;
}

$_SESSION['error'] = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = clean($_POST['name']);
	$email = clean($_POST['email']);
	$password = clean($_POST['password']);

	$query = $conn->prepare('SELECT * FROM users WHERE email=:email');
	$query->bindValue(':email', $email);
	$query->execute();
	$user = $query->fetch();

	if ($email == $user['email'] && password_verify($password, $user['password']) && $name == $user['username']) {
		// Access granted -> Go to dashboard
		header("Location: dashboard/");
	} else {
		// Provided cridentials don't match
		$_SESSION['error'] = "Information provided don't match";
		header("Location: regularuserlogin.php");
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login form</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php include('menu.php');
	?>
	<div class="form-container">
		<form action="" method="post">

			<div>

				<?php if (!empty($_SESSION['error'])) : ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

						<strong>Password!</strong> <?= $_SESSION['error'] ?>
					</div>
				<?php endif ?>

			</div>

			<h3>Login now</h3>
			<label for="name">Name:</label>
			<input type="text" name="name" required placeholder="enter your name"><br>
			<label for="Email">Email:</label>
			<input type="email" name="email" required placeholder="enter your email"><br>
			<label for="password">Password:</label>
			<input type="password" name="password" required placeholder="enter password"><br>

			<input type="submit" name="submit" value="login now" class="form-btn">


		</form>

	</div>
	<?php include_once 'footer.php' ?>
	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>