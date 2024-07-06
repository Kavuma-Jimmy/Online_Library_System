<!DOCTYPE html?
<html>
<head>
<title></title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">


</head>
<body>

<?php include('menu.php'); ?>
    
<form actin = "upload.php" method = "POST"enctype="multipart/form-data">
<input type= "file" name = "file">
<button type="submit" name="submit">Addbook</button>


</form>
<?php include_once 'footer.php'?>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>


</html>
