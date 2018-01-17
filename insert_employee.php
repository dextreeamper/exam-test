<?php

$servername = 'localhost';
$username = 'root';
$password = 'L33tdigital';
$database = 'examtest';

$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "INSERT INTO employee_details (first_name, last_name, age, department, phone_no, status) 
				VALUES('$_POST[first_name]','$_POST[last_name]','$_POST[age]','$_POST[department]','$_POST[phone_no]','$_POST[status]') ";

$sql_result = $conn->query($sql);

if ($sql_result){
	echo "Employee Added";
} else {
		echo "Something wrong";
}

$conn->close();

?>