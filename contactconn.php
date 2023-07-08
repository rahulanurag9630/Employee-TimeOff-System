<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emp_time_off";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert data into table
$sql = "INSERT INTO contact_us (name, email, message) VALUES ('$name', '$email', '$message')";
if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully";
    header('location:contact.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
