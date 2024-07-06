<?php
require_once '../config/dbconnection.php';
require_once '../config/functions.php';

if (isset($_POST["operation"])) {
    if ($_POST["operation"] == "Add") {

        $familyname  = clean_data($_POST['familyname']);
        $firstname   = clean_data($_POST['firstname']);
        $lastname    = clean_data($_POST['lastname']);
        $gender      = clean_data($_POST['gender']);
        $dob         = clean_data($_POST['dob']);
        $bloodgroup  = clean_data($_POST['bloodgroup']);
        $religion    = clean_data($_POST['religion']);
        $classroom   = clean_data($_POST['classroom']);
        $status      = clean_data($_POST['status']);
        $joiningdate = clean_data($_POST['joiningdate']);
        $status      = clean_data($_POST['status']);

        $bookcover     = '';

        if ($_FILES["bookcover"]["name"] != '') {
            $bookcover = upload_cover();
        }

        $statement = $conn->prepare("
				INSERT INTO students (
                    familyname,firstname,lastname, gender, dob, bloodgroup,
                    religion, classroom, status, joiningdate, bookcover 
                    ) 
				VALUES (
                    :familyname,:firstname,:lastname, :gender, :dob, :bloodgroup,
                    :religion, :classroom, :status, :joiningdate, :bookcover 
                     )");
        $result = $statement->execute(
            array(
                ':familyname'  => $familyname,
                ':firstname'   => $firstname,
                ':lastname'    => $lastname,
                ':gender'      => $gender,
                ':dob'         => $dob,
                ':bloodgroup'  => $bloodgroup,
                ':religion'    => $religion,
                ':classroom'   => $classroom,
                ':status'      => $status,
                ':joiningdate' => $joiningdate,
                ':bookcover'     => $bookcover,
            )
        );
    }
    if ($_POST["operation"] == "Edit") {
        $student_bookcover     = '';

        // Checking for whether image is not null to unlink it without throwing error
        $sql = "SELECT * FROM students WHERE id=:id";
        $query = $conn->prepare($sql);
        $query->bindValue(':id', clean_data($_POST['student_id']));
        $query->execute();
        $student_bookcover = $query->fetch();

        if ($_FILES["bookcover"]["name"] != '') {
            if ($student_bookcover['bookcover'] != null) {
                $file = "../uploadedbooks/bookcover/" . $_POST["hidden_cover_image"];
                unlink($file); // On update, remove old image
                $student_bookcover = upload_cover();
            } else {
                $student_bookcover = upload_cover();
            }
        } else {
            $student_bookcover = $_POST["hidden_cover_image"];
        }

        $statement = $conn->prepare(
            "UPDATE students 
				SET name  = :name,  
                firstname       = :firstname,
                bookcover         = :bookcover
				 WHERE id       = :id
				"
        );

        $result = $statement->execute(
            array(
                ':fieldname'  => clean_data($_POST['fieldname']),
                ':fieldname'   => clean_data($_POST['fieldname']),
                ':bookcover'     => $student_bookcover,
                ':id'          => clean_data($_POST["student_id"])
            )
        );
    }
}
