<?php

// Check if the form has been submitted
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

    // Get the updated data from the form
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $empid = $_POST['employeeid'];
    $dpt = $_POST['department'];
    $designation = $_POST['designation'];
    $doj = $_POST['joiningdate'];
    $cpass = $_POST['managername'];

    // Update the database with the new data
 
    $sql = "UPDATE registration SET firstname='$firstname', lastname='$lastname', email='$email', cnumber='$contact', empid='$empid', dpt='$dpt', designation='$designation', doj='$doj', cpass='$cpass' WHERE email='$email'";
    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully";
        header('Location: profile.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    // Redirect to the updated profile page
    
    exit();


?>
