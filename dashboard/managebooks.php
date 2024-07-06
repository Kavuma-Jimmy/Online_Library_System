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
      <div class="container-fluid">
        <table id="managebooksTable" class="w-100 table table-bordered table-hover table-striped dt-responsive nowrap">
          <thead>
            <tr>
              <th>Book Name</th>
              <th>Category</th>
              <th>Author</th>
              <th>Shelf</th>
              <th>Book ISBN</th>
              <th>Book Type</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class="">
              <td>R1C1</td>
              <td>R1C2</td>
              <td>R1C3</td>
              <td>R1C3</td>
              <td>R1C3</td>
              <td>R1C3</td>
              <td>
                <div class="dropdown">
                  <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots-vertical text-danger"></i>
                  </a>
                  <ul class="dropdown-menu">
                  <li>
                      <button type="button" id="adminupdatebtn" class="dropdown-item" value="">
                        <i class="bi bi-eye" style="color:dodgerblue"></i> View
                      </button>
                    </li>
                    <li>
                      <button type="button" id="adminupdatebtn" class="dropdown-item" value="">
                        <i class="bi bi-pencil" style="color:green"></i> Edit
                      </button>
                    </li>
                    <li>
                      <button type="button" id="admindeletebtn" class="dropdown-item" value="">
                        <i class="bi bi-trash" style="color:red"></i> Delete
                      </button>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>
            <tr class="">
              <td>Item</td>
              <td>Item</td>
              <td>Item</td>
              <td>Item</td>
              <td>Item</td>
              <td>Item</td>
              <td>
                <div class="dropdown">
                  <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots-vertical text-danger"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li>
                      <button type="button" id="adminupdatebtn" class="dropdown-item" value="">
                        <i class="bi bi-eye" style="color:dodgerblue"></i> View
                      </button>
                    </li>
                    <li>
                      <button type="button" id="adminupdatebtn" class="dropdown-item" value="">
                        <i class="bi bi-pencil" style="color:green"></i> Edit
                      </button>
                    </li>
                    <li>
                      <button type="button" id="admindeletebtn" class="dropdown-item" value="">
                        <i class="bi bi-trash" style="color:red"></i> Delete
                      </button>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
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
  <script>
    $(document).ready(function() {

      $("#managebooksTable").DataTable({

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
              search: 'applied',
              order: 'applied',
            }
          },
          {
            extend: "copyHtml5",
            text: 'Copy <i class="bi bi-file-earmark"></i> ',
            titleAttr: 'Copy',
            className: 'btn btn-sm btn-dark',
          }
        ]


      });
      // $("#dims").DataTable({
      //   "processing": true,
      //   "serverSide": true,
      //   "stateSave": false, // Remembers data table state
      //   "order": [],
      //   "ajax": {
      //     url: "fetchdims",
      //     type: "POST",
      //   },
      //   "columnDefs": [{
      //     "orderable": false,
      //     "targets": [0]
      //   }],

      //   dom: "<'row gx-0 pl-0'<'col-sm-12 col-md-3'l>\
      //                   <'col-sm-12 col-md-6'B>\
      //                   <'col-sm-12 col-md-3'f>>" +
      //     "<'row gx-0'<'col-sm-12'tr>>" +
      //     "<'row gx-0'<'col-sm-12 col-md-5'i>\
      //                   <'col-sm-12 col-md-7'p>>",
      //   buttons: [{
      //       extend: 'excelHtml5',
      //       text: 'Excel <i class="bi bi-file-earmark-excel"></i> ',
      //       titleAttr: 'Export to Excel',
      //       className: 'btn btn-sm btn-success',
      //       exportOptions: {
      // 
      //         search: 'applied',
      //         order: 'applied',
      //       }
      //     },
      //     {
      //       extend: 'pdfHtml5',
      //       text: 'PDF <i class="bi bi-file-earmark-pdf"></i> ',
      //       titleAttr: 'Export to PDF',
      //       className: 'btn btn-sm btn-danger',
      //       filename: 'users_pdf',
      //       exportOptions: {
      // 
      //         search: 'applied',
      //         order: 'applied',
      //       }
      //     },
      //     {
      //       extend: 'print',
      //       text: 'Print <i class="bi bi-printer"></i> ',
      //       titleAttr: 'Print',
      //       className: 'btn btn-sm btn-light',
      //       exportOptions: {
      // 
      //         search: 'applied',
      //         order: 'applied',
      //       }
      //     },
      //     {
      //       extend: "copyHtml5",
      //       text: 'Copy <i class="bi bi-file-earmark"></i> ',
      //       titleAttr: 'Copy',
      //       className: 'btn btn-sm btn-dark',
      //       exportOptions: {
      //         columns: [1, 2, 3]
      //       }
      //     },
      //     {
      //       extend: 'colvis',
      //       className: 'btn btn2',
      //       text: 'Visbility <i class="bi bi-eye"></i>',
      //       titleAttr: 'Column Visibility',
      //     }
      //   ]


      // });



    })
  </script>

</body>

</html>