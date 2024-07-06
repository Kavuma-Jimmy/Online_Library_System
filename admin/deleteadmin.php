<?php
require_once '../config/dbconnection.php';
require_once '../config/functions.php';


if (isset($_POST["adminid"])) {
    $statement = $conn->prepare(
        "DELETE FROM admin WHERE id = :id"
    );
    $result = $statement->execute(
        array(
            ':id' => clean_data($_POST["adminid"])
        )
    );
}
