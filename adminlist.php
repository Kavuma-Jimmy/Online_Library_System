<?php

require_once './config/dbconnection.php';
require_once './config/functions.php';

?>

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
    <link rel="stylesheet" href="sweetalert/css/sweetalert.min.css">
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
            <table class="table table-bordered table-hover table-responsive" id="adminlist">
                <thead>
                    <tr>
                        <th>Admin Number</th>
                        <th>Admin Name</th>
                        <th>User Name</th>
                        <th>Admin Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <!-- Updatemodel -->

    <!-- Modal Body -->
    <div class="modal fade" id="updateadminmodal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
            <form action="" method="post">
                <div class="modal-content">
                    <div class="modal-header pt-1 pb-1">
                        <h5 class="modal-title" id="modalTitleId">
                            Update Admin
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" name="adminname" id="adminname">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label"> Username</label>
                                    <input type="text" class="form-control" name="adminusername" id="adminusername">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="" class="form-label"> Email</label>
                                    <input type="email" class="form-control" name="adminemail" id="adminemail">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label"> Admin no.</label>
                                    <input type="text" class="form-control" name="adminadminno" id="adminadminno">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label"> New Password</label>
                                    <input type="password" class="form-control" name="adminpassword" id="adminpassword">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pt-1 pb-1">
                        <input type="hidden" id="adminid" name="adminid">
                        <input type="submit" value="Update" class="btn btn-sm btn-primary" name="updateadmin" id="updateadmin">
                    </div>
                </div>
            </form>
        </div>
    </div>


    <?php include_once 'footer.php' ?>


    <script src="jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="datatables/datatables.min.js"></script>
    <script src="datatables/dataTables.responsive.min.js"></script>
    <script src="datatables/pdfmake.min.js"></script>
    <script src="datatables/vfs_fonts.js"></script>
    <script src="sweetalert/js/sweetalert2@11.js"></script>

    <script>
        $(document).ready(function() {

            // Retrieving adminlist
            var adminTable = $("#adminlist").DataTable({
                    "processing": true,
                    "serverSide": true,
                    "stateSave": false, // Remembers data table state
                    "order": [],
                    "ajax": {
                        url: "admin/fetchadmins.php",
                        type: "POST",
                    },
                    "columnDefs": [{
                        "orderable": false,
                        "targets": [4]
                    }],

                    dom: "<'row gx-0 pl-0'<'col-sm-12 col-md-3'l>\
                        <'col-sm-12 col-md-6'B>\
                        <'col-sm-12 col-md-3'f>>" +
                        "<'row gx-0'<'col-sm-12'tr>>" +
                        "<'row gx-0'<'col-sm-12 col-md-5'i>\
                        <'col-sm-12 col-md-7'p>>",
                    buttons: [{
                            extend: 'excelHtml5',
                            text: 'Excel <i class="bi bi-file-earmark-excel"></i> ',
                            titleAttr: 'Export to Excel',
                            className: 'btn btn-sm btn-success',
                            exportOptions: {
                                columns: [0, 1, 2, 3],
                                search: 'applied',
                                order: 'applied',
                            }
                        },
                        {
                            extend: 'pdfHtml5',
                            text: 'PDF <i class="bi bi-file-earmark-pdf"></i> ',
                            titleAttr: 'Export to PDF',
                            className: 'btn btn-sm btn-danger',
                            filename: 'users_pdf',
                            exportOptions: {
                                columns: [0, 1, 2, 3],
                                search: 'applied',
                                order: 'applied',
                            }
                        },
                        {
                            extend: 'print',
                            text: 'Print <i class="bi bi-printer"></i> ',
                            titleAttr: 'Print',
                            className: 'btn btn-sm btn-light',
                            exportOptions: {
                                columns: [0, 1, 2, 3],
                                search: 'applied',
                                order: 'applied',
                            }
                        },
                        {
                            extend: "copyHtml5",
                            text: 'Copy <i class="bi bi-file-earmark"></i> ',
                            titleAttr: 'Copy',
                            className: 'btn btn-sm btn-dark',
                            exportOptions: {
                                columns: [0, 1, 2, 3]
                            }
                        }
                    ]

                });


            // Update Admin
            $(document).on('click', '#updatebtn', function(event) {
                event.preventDefault();
                const id = $(this).val();

                $.ajax({
                    method: 'POST',
                    url: 'admin/fetchadmin.php',
                    data: {
                        adminid: id
                    },
                    success: function(response) {
                        let data = JSON.parse(response);
                        $('#adminname').val(data.name);
                        $('#adminusername').val(data.username);
                        $('#adminemail').val(data.email);
                        $('#adminadminno').val(data.adminno);
                        $('#adminpassword').val();
                        $('#adminid').val(id);
                        $('#updateadminmodal').modal('show');
                    }
                });
            });


            // Delete user
            $(document).on('click', '#deletebtn', function(event) {
                event.preventDefault();
                const id = $(this).val();

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            method: 'POST',
                            url: 'admin/deleteadmin.php',
                            data: {
                                adminid: id
                            },
                            success: function(response) {
                                Swal.fire({
                                    title: 'success',
                                    text: 'Admin deleted successfully',
                                    icon: 'success',
                                }).then(() => {
                                    adminTable.ajax.reload();
                                });
                            }
                        });
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        Swal.fire('Cancelled', 'Admin data is safe :)', 'error');
                    }
                });
            });

        });
    </script>

</body>

</html>