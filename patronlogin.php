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
	<?php include('menu.php'); ?>
	<div class="form-container">
		<form action="" method="post">

			<h3>Login now</h3>
            <label for="patronNumber">Name:</label>
			<input type="text" name="patronnumber" required placeholder="enter your patron number"><br>
			<label for="name">Name:</label>
			<input type="text" name="name" required placeholder="enter your name"><br>
			<label for="Email">Email:</label>
			<input type="email" name="email" required placeholder="enter your email"><br>
			<label for="password">Password:</label>
			<input type="password" name="password" required placeholder="enter password"><br>

			<input type="submit" name="submit" value="login now" class="form-btn">
			

		</form>

	</div>
	<?php include_once 'footer.php'?>
	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>