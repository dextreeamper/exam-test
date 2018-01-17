<?php

$servername = 'localhost';
$username = 'root';
$password = 'L33tdigital';
$database = 'examtest';

$conn = mysqli_connect($servername, $username, $password, $database);

if(isset($_GET['edit']))
{
	$id = $_GET['edit'];
	$sql = "SELECT * FROM employee_details WHERE id='$id'";
	$sql_result = $conn->query($sql);
	$row = mysqli_fetch_assoc($sql_result);
}

if(isset($_POST['new_first_name'])){
	$newname = $_POST['newName'];
	$id = $_POST['id'];

	$sql = "UPDATE employee_details SET first_name = '$new_first_name' WHERE id = '$id'";
	$sql_result = $conn->query($sql);
}

?>

<form method="POST">
		<p>
			<label><strong>Update Employee</strong></label>
		</p>
		<p>
			<label>First Name:</label>
			<input type="text" name="newName" value=<?php echo $row['first_name']; ?> >
		</p>
		<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
		<input type="submit" value="Submit" name="Submit">
</form>


<?php

$conn->close();

?>