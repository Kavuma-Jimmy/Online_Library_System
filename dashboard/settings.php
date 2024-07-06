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
                    <li class="breadcrumb-item active">Manage Books</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="card shadow-lg">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Upload Badge</label>
                                            <input type="file" class="form-control form-control-sm" name="" id="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card shadow border-light">
                                    <div class="card-body">
                                        <h4 class="card-title">Update Institution Profile</h4>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Institution Name</label>
                                                    <input type="text" class="form-control form-control-sm" name="" id="" placeholder="Institution name">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Institution Description</label>
                                                    <textarea class="form-control" name="" id="" rows="3" placeholder="Some nice Description"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Contact Person</label>
                                                    <input type="text" class="form-control form-control-sm" name="" id="" placeholder="Jimmy Kavuma">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">E-mail</label>
                                                    <input type="email" class="form-control form-control-sm" name="" id="" placeholder="Jimmy@hotmail.com">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Website</label>
                                                    <input type="text" class="form-control form-control-sm" name="" id="" placeholder="https://www.website.com">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Contact</label>
                                                    <input type="text" class="form-control form-control-sm" name="" id="" placeholder="+256 xxx">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Address</label>
                                                    <input type="text" class="form-control form-control-sm" name="" id="" placeholder="Kampala Uganda">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Gmap Link</label>
                                                    <input type="text" class="form-control form-control-sm" name="" id="" placeholder="https://google....">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <input type="submit" class="btn btn-sm btn-primary" name="update" id="update" value="Update">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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
    <script src="assets/vendor/datatables/pdfmake.min.js"></script>
    <script src="assets/vendor/datatables/vfs_fonts.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>