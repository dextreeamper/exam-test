<?php

$servername = 'localhost';
$username = 'root';
$password = 'L33tdigital';
$database = 'examtest';

$conn = mysqli_connect($servername, $username, $password, $database);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Exam Test</title>
	<style type="text/css">
		form p {
			display: block;
		}
		th, td {
			padding: 0 50px;
		}
		table {
			margin-top: 50px;
		}
	</style>

	<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>

</head>
<body>

	<form action="search.php" method="GET">
		<p>
			<label><strong>Search Employee</strong></label>
		</p>
		<p>
			<input type="text" name="search">
		</p>
		<p>
			<input type="submit" value="Search">
		</p>
	</form>
	<form action="insert_employee.php" method="POST">
		<p>
			<label><strong>Insert Employee</strong></label>
		</p>
		<p>
			<label>First Name:</label>
			<input type="text" name="first_name">
		</p>
		<p>
			<label>Last Name:</label>
			<input type="text" name="last_name">
		</p>
		<p>
			<label>Age:</label>
			<input type="number" name="age">
		</p>
		<p>
			<label>Phone Number:</label>
			<input type="number" name="phone_no">
		</p>
		<p>
			<label>Department:</label>
			<input type="text" name="department">
		</p>
		<p>
			<label>Status:</label>
			<input type="text" name="status">
		</p>
		<input type="submit" value="Submit Data">
	</form>
	<table>
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Phone Number</th>
			<th>Department</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		<?php 

			//query the employee details
			$sql = "SELECT * from employee_details";
			$sql_result = $conn->query($sql);

			if ($sql_result->num_rows > 0) {
				// display data in each row
				while ($each_employee = $sql_result->fetch_assoc()) {

		?>

		<tr>
				<td><?php echo $each_employee['first_name'] . " " . $each_employee['last_name']; ?></td>
				<td><?php echo $each_employee['age']; ?></td>
				<td><?php echo $each_employee['phone_no']; ?></td>
				<td><?php echo $each_employee['department']; ?></td>

				<td>
					<a href="#" data="<?php echo $each_employee['id']; ?>" class="btn-status 
						<?php echo ($each_employee['status'])? 'btn-active': 'btn-inactive' ?> ">
						<?php echo ($each_employee['status'])? 'Active' : 'Inactive' ?>
					</a>
				</td>

				<td><?php echo "<a href='update.php?edit=". $each_employee['id'] . "'>Edit" ?></td>
		</tr>
		<?php
					}
			} else {
					echo "no results";
			}
			$conn->close();
		?>
	</table>

	<script type="text/javascript">
		// $(document).on('click','.btn-status', function(){
		// 	var status = '1';
		// 	var message = 'Activated';
		// 	if($(this).hasClass("btn-active")){
		// 		status = '0';
		// 		message = 'Deactivated';
		// 	}


		// 	if(confirm("Are you sure want to" + message)) {
		// 		var id = $(this).data('id');
		// 		url = "/ajax.php";
		// 		$.ajax({
		// 			type: "POST",
		// 			url: url,
		// 			// parameter of current object
		// 			data: {id:id, status: status},
		// 			dataType: "json",
		// 			success: function(data)
		// 			{
		// 				location.reload();
		// 			}

		// 		});

		// 	}

		// });
		$(document).on('click','.btn-status', function(){
			var status = ($(this).hasClass("btn-active")) ? '0' : '1';
			var message = (status=='0') ? 'Deactivate' : 'Activate';

			if(confirm("Are you sure want to " + message)) {
				var current_element = $(this);
				var url = "ajax.php";

				$.ajax({
					type: "POST",
					url: url,
					// parameter of current object
					dataType: "json",
					data: {id:$(current_element).attr('data'), status:status},
					success: function(data)
					{
						location.reload();
					}

				});

			}

		});

	</script>

</body>
</html>