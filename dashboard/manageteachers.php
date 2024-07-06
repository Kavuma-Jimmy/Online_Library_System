<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lib Management System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.gstatic.com" rel="preconnect"> -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/datatables/datatables.min.css" rel="stylesheet">
  <link href="assets/vendor/datatables/responsive.bootstrap5.min.css" rel="stylesheet">
  <link href="assets/vendor/datatables/buttons.bootstrap.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ========== Start Header ========== -->
  <?php include_once 'header.php' ?>
  <!-- ========== End Header ========== -->

  <!-- ========== Start Sidebar ========== -->
  <?php include_once 'sidebar.php' ?>
  <!-- ========== End Sidebar ========== -->

  <!-- ========== Start Main ========== -->
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
          <li class="breadcrumb-item">Dashboard</li>
          <li class="breadcrumb-item active">Manage Teachers</li>
        </ol>
      </nav>
    </div>

    <section class="section dashboard">
      Cards
    </section>

  </main>
  <!-- ========== End Main ========== -->

  <!-- ========== Start Footer ========== -->
  <?php include_once 'footer.php' ?>
  <!-- ========== End Footer ========== -->


  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery-3.6.1.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.validate.min.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/sweetalert/js/sweetalert2@11.js"></script>
  <script src="assets/vendor/datatables/datatables.min.js"></script>
  <script src="assets/vendor/datatables/dataTables.responsive.min.js"></script>
  <script src="assets/vendor/datatables/buttons.colVis.min.js"></script>
  <script src="assets/vendor/datatables/pdfmake.min.js"></script>
  <script src="assets/vendor/datatables/vfs_fonts.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/dashboard.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>