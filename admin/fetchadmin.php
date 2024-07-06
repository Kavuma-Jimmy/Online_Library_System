<?php
require_once '../config/dbconnection.php';
require_once '../config/functions.php';

if (isset($_POST["adminid"])) {
    $output = array();
    $statement = $conn->prepare(
        "SELECT * FROM admin WHERE id = '" . $_POST["adminid"] . "' LIMIT 1"
    );
    $statement->execute();
    $result = $statement->fetchAll();

    foreach ($result as $row) {

        $output["name"] = $row["name"];
        $output["username"] = $row["username"];
        $output["email"] = $row["email"];
        $output["adminno"] = $row["adminno"];

    }
    echo json_encode($output);
}

if ($_POST["updateadmin"] == "updateadmin") {

    var_dump($_POST);
    exit;
}