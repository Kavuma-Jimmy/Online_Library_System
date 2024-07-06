<?php
include_once '../config/dbconnection.php';
include_once '../config/functions.php';

$query = '';
$output = array();
$query .= "SELECT * FROM admin ";
if (isset($_POST["search"]["value"])) {
    $query .= 'WHERE name LIKE "%' . $_POST["search"]["value"] . '%" ';
    $query .= 'OR username LIKE "%' . $_POST["search"]["value"] . '%" ';
    $query .= 'OR email LIKE "%' . $_POST["search"]["value"] . '%" ';
}
if (isset($_POST["order"])) {
    $query .= 'ORDER BY ' . $_POST['order']['0']['column'] . ' ' . $_POST['order']['0']['dir'] . ' ';
} else {
    $query .= 'ORDER BY id DESC ';
}
if ($_POST["length"] != -1) {
    $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $conn->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();

foreach ($result as $row) {

    $sub_array = array();
    $sub_array[] = $row['adminno'];
    $sub_array[] = $row['name'];
    $sub_array[] = $row['username'];
    $sub_array[] = $row['email'];

    $sub_array[] = '
    <div class="dropdown">
        <a class="btn btn-light hidden-arrow dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-three-dots-vertical text-danger"></i>
        </a>
        <ul class="dropdown-menu">
        <li>
            <button type="button" id="updatebtn" class="dropdown-item" value="' . $row['id'] . '">
                <i class="bi bi-pencil" style="color:green"></i> Edit
            </button>
        </li>
        <li>
            <button type="button" id="deletebtn" class="dropdown-item" value="' . $row['id'] . '">
                <i class="bi bi-trash" style="color:red"></i> Delete
            </button>
        </li>
    </ul>

    </div>';

    $data[] = $sub_array;
}
$output = array(
    "draw" => intval($_POST["draw"]),
    "recordsTotal" => $filtered_rows,
    "recordsFiltered" => get_total_from_table("admin"),
    "data" => $data,
);
echo json_encode($output);
