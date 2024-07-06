<?php
require_once('dbconnection.php');

function get_total_from_table($table_name)
{
    global $conn;
    $query = $conn->prepare("SELECT * FROM ".$table_name);
    $query->execute();
    $result = $query->fetchAll();
    return $query->rowCount();
}



function upload_cover()
{
    if (isset($_FILES["bookcover"])) {
        if(!file_exists('../uploadedbooks/bookcover')){
            mkdir('../uploadedbooks/bookcover');
        }
        $extension = explode('.', $_FILES['bookcover']['name']);
        $new_name = rand() . '.' . $extension[1];
        $destination = '../uploadedbooks/profile/' . $new_name;
        move_uploaded_file($_FILES['bookcover']['tmp_name'], $destination);
        return $new_name;
    }
}


// Cleaning data
function clean_data($data)
{
    $results = trim($data);
    $results = htmlentities($data);
    $results = htmlspecialchars($data); // <h1> = &001;h1&0048
    $results = stripslashes($data);
    return $results;
}
