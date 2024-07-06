<!-- datatables -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Online Library</title>
    <link rel="stylesheet" href="owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="datatables/datatables.min.css">
    <link rel="stylesheet" href="datatables/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php include('menu.php'); ?>

    <div class="container-fluid mt-4">
        <div class="slideshow-container">
            <img class="mySlides" src="images/online library2.jpg">
            <img class="mySlides" src="images/online library.png">
            <img class="mySlides" src="images/online-library1.jpg">
        </div>
    </div>

    <div class="container">
        <div class="">
            <table class="table table-bordered table-hover table-responsive" id="patronlist">
                <thead>
                    <tr>
                        <th>Patron Number</th>
                        <th> Name</th>
                        <th> Email</th>
                        <th>User Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td>875</td>
                        <td>Kavuma Jimmy</td>
                        <td>jimmy@gmail.com</td>
                        <td>Admin</td>
                        <td>
                        <div class="dropdown">
                    <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical text-danger"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <button type="button" id="adminupdatebtn" class="dropdown-item" value="">
                                <i class="bi bi-pencil" style="color:dodgerblue"></i> Edit
                            </button>
                        </li>
                        <li>
                            <button type="button" id="admindeletebtn" class="dropdown-item" value="">
                                <i class="bi bi-trash" style="color:red"></i> Delete
                            </button>
                        </li>
                        <li>
                            <button type="button" id="adminupdatebtn" class="dropdown-item" value="">
                                <i class="bi bi-eye" style="color:green"></i> View
                            </button>
                        </li>
                    </u
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>


    <?php include_once 'footer.php' ?>


    <script src="jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="datatables/datatables.min.js"></script>
    <script src="datatables/dataTables.responsive.min.js"></script>
    <script src="datatables/pdfmake.min.js"></script>
    <script src="datatables/vfs_fonts.js"></script>
    <script src="datatables/"></script>

    <script>
        $("#patronlist").DataTable()
    </script>

</body>

</html>