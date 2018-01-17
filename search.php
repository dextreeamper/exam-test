<?php

$servername = 'localhost';
$username = 'root';
$password = 'L33tdigital';
$database = 'examtest';

$conn = mysqli_connect($servername, $username, $password, $database);

//get value from search input
$search = $_GET['search'];

$sql = "SELECT * FROM employee_details WHERE 
	first_name like '%$search%' OR 
	last_name like '%$search%' OR 
	department like '%$search%'";
$sql_result = $conn->query($sql);

echo "<table>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Department</th>";
echo "<th>Status</th>";
echo "</tr>";

while ($row=$sql_result->fetch_assoc()) {	
	echo "<tr>";
	echo "<td>" . $row['first_name']. " " .$row['last_name']."</td>";
	echo "<td>" . $row['department']."</td>";
	echo "<td>" . $row['status']."</td>";
	echo "</tr>";
}

echo "</table>";

$conn->close();

?>