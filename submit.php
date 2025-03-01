<?php
include "connection.php";

$name = $_POST['name'];
$crew_id=$_POST['crew_id'];
$designation = $_POST['designation'];
$status = $_POST['status'];

$sql = "INSERT INTO lp_name (crew_id,Name,Designation,status) VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $status,$designation, $crew_id);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
