<?php

$servername = 'localhost';
$username = 'root';
$password = 'L33tdigital';
$database = 'examtest';

$conn = mysqli_connect($servername, $username, $password, $database);

extract($_POST);
$employee_id = $conn->real_escape_string($id);
$status = $conn->real_escape_string($status);
$sql = $conn->query("UPDATE employee_details SET status=" .$status. " WHERE id = ".$id."");

if($conn->query($sql) == TRUE) {
	echo 1;
} else {
	echo 0;
}

// echo 1;

// $conn->close();

?>