<?php $current_page = basename($_SERVER['PHP_SELF']); ?>

<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

include 'nav.php';

session_start();


$email=$_SESSION["email"];
$host="localhost";
$db_user="root";
$db_password="";
$db_name="emp_time_off";
$conn=mysqli_connect($host,$db_user,$db_password,$db_name)or die("connection error". mysqli_connect_error());
if($conn){


$sql="SELECT * FROM `registration` where email='".$email."'";

}
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // If the user is not logged in, redirect to the login page
    header('Location: login.html');
    exit;
  }

?>

<!DOCTYPE html>
<html>

<head>
    <title>User Profile</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Styles for the user profile page */

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container1 {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            margin-top: 0;
        }

        label {
            display: inline-block;
            width: 150px;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: #f00;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container1">
        <h1>User Profile</h1>
        <?php
		
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);
				// Display user details in HTML form
				echo '<form action="update.php" method="post">';
				echo '<label for="firstname">First Name:</label>';
				echo '<input type="text" id="firstname" name="firstname" value="' . $row['firstname'] . '"><br>';
				echo '<label for="lastname">Last Name:</label>';
				echo '<input type="text" id="lastname" name="lastname" value="' . $row['lastname'] . '"><br>';
				echo '<label for="email">Email Address:</label>';
				echo '<input type="email" id="email" name="email" value="' . $row['email'] . '" disabled><br>';
				echo '<label for="contact">Contact Number:</label>';
				echo '<input type="text" id="contact" name="contact" value="' . $row['cnumber'] . '"><br>';
				echo '<label for="employeeid">Employee ID:</label>';
				echo '<input type="text" id="employeeid" name="employeeid" value="' . $row['empid'] . '"><br>';
				echo '<label for="department">Department:</label>';
				echo '<input type="text" id="department" name="department" value="' . $row['dpt'] . '"><br>';
				echo '<label for="designation">Designation:</label>';
				echo '<input type="text" id="designation" name="designation" value="' . $row['designation'] . '"><br>';
				echo '<label for="joiningdate">Date of Joining:</label>';
				echo '<input type="date" id="joiningdate" name="joiningdate" value="' . $row['doj'] . '"><br>';
				echo '<label for="managername">Password:</label>';
				echo '<input type="text" id="managername" name="managername" value="' . $row['cpass'] . '"><br>';
				echo '<input type="submit" value="Update">';
				echo '</form>';
			} else {
				echo 'User not found.';
			}
			// Close the database connection
			mysqli_close($conn);
		?>
    </div>
</body>

</html>