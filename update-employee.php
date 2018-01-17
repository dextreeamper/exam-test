<?php

$servername = 'localhost';
$username = 'root';
$password = 'L33tdigital';
$database = 'examtest';

$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "UPDATE employee_details SET first_name = '$_POST[first_name]' WHERE id='$employee_id'";
$sql_result = $conn->query($sql);

if ($sql_result){
	echo "Employee Record Updated";
} else {
		echo "Something wrong";
}

$conn->close();

?>