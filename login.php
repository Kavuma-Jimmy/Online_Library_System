<?php session_start(); ?>
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

	<?php require_once('menu.php') ?>

	<div class="container">
		<div class=" mx-auto" style="min-height: 70vh;">
			<div class="d-flex justify-content-center align-items-center customflex">
				<div class="row w-50">
					<div class="col-md-12">

						<div>

							<?php if (!empty($_SESSION['info'])) : ?>
								<div class="alert alert-success alert-dismissible fade show" role="alert">
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

									<strong>Password!</strong> <?= $_SESSION['info'] ?>
								</div>
							<?php endif ?>

						</div>

					</div>
					<div class="col-md-4">
						<div class=" text-center">
							<div class="card shadow">
								<div class="card-body" id="adminicon"></div>
							</div>
							<a href="adminlogin.php" class="btn btn-sm btn-outline-info w-100 mt-2">Admin</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card shadow">
							<div class="card-body" id="patronicon"></div>
						</div>
						<a href="patronlogin.php" class="btn btn-sm btn-outline-info w-100 mt-2">Patron</a>
					</div>
					<div class="col-md-4">
						<div class="card shadow">
							<div class="card-body" id="usericon"></div>
						</div>
						<a href="regularuserlogin.php" class="btn btn-sm btn-outline-info w-100 mt-2">User</a>
					</div>
				</div>
			</div>
		</div>
		<div>

		</div>
	</div>

	<?php include_once 'footer.php' ?>

</body>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</html>