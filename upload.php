<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if file is a actual excel file or fake excel
    if($fileType != "xlsx" && $fileType != "xls") {
        echo "Sorry, only XLSX & XLS files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
            $reader = new Xlsx();
            $spreadsheet = $reader->load($target_file);
            $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
            insertData($sheetData);
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

function insertData($data) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "katni_mail_detail";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    foreach ($data as $row) {
        $sql = "INSERT INTO trains (train_no, day, time, destination, remark)
        VALUES ('" . $row['A'] . "', '" . $row['B'] . "','" . $row['C'] . "','" . $row['D'] . "','" . $row['E'] . "')";
        // $sql = "INSERT INTO lp_name (crew_id, Name, Designation,status)
        // VALUES ('" . $row['A'] . "', '" . $row['B'] . "','" . $row['C'] . "','" . $row['D'] . "')";

        if ($conn->query($sql) !== TRUE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    echo "New records created successfully";
    $conn->close();
}
?>