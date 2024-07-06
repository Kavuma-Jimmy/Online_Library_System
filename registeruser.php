<?php
session_start();

require_once 'config/dbconnection.php';
require_once 'config/functions.php';

$_SESSION['error'] = '';
$_SESSION['info'] = '';

if (isset($_POST['registeruser']) == 'registeruser') {
	$fullname = clean_data($_POST['name']);
	$username = clean_data($_POST['username']);
	$email = clean_data($_POST['email']);
	$password = clean_data($_POST['password']);
	$cpassword = clean_data($_POST['cpassword']);
	$adminno = clean_data($_POST['adminno']);
	$patronno = clean_data($_POST['patronno']);

	// First check if passwords match then if true move to else for data insertion
	if ($password != $cpassword) {
		$_SESSION['error'] = "Passwords provided don't match!";
	} else {
		// If admin number is empty go and check patron number is insert user without number
		if (!empty($adminno)) {
			// Insert record for admin
			$query = $conn->prepare("INSERT INTO admin(name,email,password,adminno,username)VALUES(:name,:email,:password,:adminno, :username)");
			$query->bindValue(':name', $fullname);
			$query->bindValue(':username', $username);
			$query->bindValue(':email', $email);
			$query->bindValue(':password', password_hash($password, PASSWORD_DEFAULT));
			$query->bindValue(':adminno', $adminno);
			$query->execute();

			if ($query->rowCount() > 0) {
				$_SESSION['info'] = 'You have successfully registered now login!';
				header("Location: login.php");
			}
		} elseif (!empty($patronno)) {
			// Insert record for patron
			$query = $conn->prepare("INSERT INTO patrons(name,email,password,patronno,username)VALUES(:name,:email,:password,:patronno, :username)");
			$query->bindValue(':name', $fullname);
			$query->bindValue(':username', $username);
			$query->bindValue(':email', $email);
			$query->bindValue(':password', password_hash($password, PASSWORD_DEFAULT));
			$query->bindValue(':patronno', $adminno);
			$query->execute();

			if ($query->rowCount() > 0) {
				$_SESSION['info'] = 'You have successfully registered now login!';
				header("Location: login.php");
			}
		} else {
			// Insert user
			$query = $conn->prepare("INSERT INTO users(name,email,password,username)VALUES(:name,:email,:password, :username)");
			$query->bindValue(':name', $fullname);
			$query->bindValue(':username', $username);
			$query->bindValue(':email', $email);
			$query->bindValue(':password', password_hash($password, PASSWORD_DEFAULT));
			$query->execute();

			if ($query->rowCount() > 0) {
				$_SESSION['info'] = 'You have successfully registered now login!';
				header("Location: login.php");
			}
		}
	}
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register form</title>
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

			<h3>Register now</h3>
			<label for="name">Name:</label>
			<input type="text" name="name" required placeholder="enter your name"><br>
			<label for="username">Username:</label>
			<input type="text" name="username" required placeholder="enter your username"><br>
			<label for="Email">Email:</label>
			<input type="email" name="email" required placeholder="enter your email"><br>
			<label for="password">Password:</label>
			<input type="password" name="password" required placeholder="enter password"><br>
			<label for="password">Confirm Password:</label>
			<input type="password" name="cpassword" required placeholder="confirm your password"><br>

			<label for="usertype">Register as:</label>
			<select name="usertype" id="usertype">
				<option value="user">User</option>
				<option value="admin">Admin</option>
				<option value="patron">Patron</option>
			</select>

			<div id="adminno">
				<label for="adminno">Admin Number:</label>
				<input type="text" name="adminno" placeholder="enter admin number"><br>
			</div>
			<div id="patronno">
				<label for="patronno">Patron Number:</label>
				<input type="text" name="patronno" placeholder="enter patron number"><br>
			</div>


			<input type="submit" name="registeruser" value="register now" class="form-btn">
			<p>already have an account? <a href="login.php">login now</a></p>

		</form>

	</div>
	<?php include_once 'footer.php' ?>

	<script src="jquery-3.3.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

	<script>
		$("#usertype").on('change', () => {
			let usertype = $("#usertype").val();
			if (usertype == 'admin') {
				document.getElementById('adminno').style.display = 'block';
				document.getElementById('patronno').style.display = 'none';
			} else if (usertype == 'patron') {
				document.getElementById('adminno').style.display = 'none';
				document.getElementById('patronno').style.display = 'block';
			} else {
				document.getElementById('adminno').style.display = 'none';
				document.getElementById('patronno').style.display = 'none';
			}
		})
	</script>

</body>

</html>