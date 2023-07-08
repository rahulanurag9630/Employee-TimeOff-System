<!DOCTYPE html>
<html>
<head>
	<title>Employee Data</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Custom CSS -->
    <style>
        /* Center the header */
h1 {
	text-align: center;
}

/* Add some padding to the table */
table {
	margin-top: 30px;
}

/* Center the table header */
table th {
	text-align: center;
}

/* Add some margin to the container */
.container {
	margin-top: 50px;
}

    </style>    
</head>
<body>
	<!-- Navigation Bar -->
	<?php include'a_nav.php';  ?>

	<!-- Main Content -->
	<div class="container my-4">
		<h1 class="text-center">Employee Data</h1>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Gender</th>
					<th>Email</th>
					<th>Contact Number</th>
					<th>Employee ID</th>
					<th>Designation</th>
					<th>Date of Joining</th>
				</tr>
			</thead>
			<tbody>
            <?php
// Create a new mysqli object to establish a database connection
$mysqli = new mysqli("localhost", "root", "", "emp_time_off");

// Check for connection errors
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

// Define a SQL query to fetch data from the registration table
$sql = "SELECT * FROM registration";

// Execute the query and get the result set
$result = $mysqli->query($sql);

// Check if there are any rows in the result set
if ($result->num_rows > 0) {
    // Create a table to display the data
    echo "
          <tbody>";

    // Loop through the rows in the result set and display the data in the table
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["firstname"] . "</td>
                <td>" . $row["lastname"] . "</td>
                <td>" . $row["gender"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["cnumber"] . "</td>
                <td>" . $row["empid"] . "</td>
                <td>" . $row["designation"] . "</td>
                <td>" . $row["doj"] . "</td>
              </tr>";
    }

    // Close the table and result set
    echo "</tbody></table>";
    $result->close();
} else {
    echo "No records found.";
}

// Close the database connection
$mysqli->close();
?>

	</div>

	<!-- Bootstrap JavaScript -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
