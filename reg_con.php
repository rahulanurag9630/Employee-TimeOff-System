<?php
// set database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emp_time_off";
 
// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// retrieve form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$cnumber = $_POST['cnumber'];
$empid = $_POST['empid'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$dpt = $_POST['dpt'];
$designation = $_POST['designation'];
$doj = $_POST['doj'];




$sql = "INSERT INTO registration (firstname,lastname,gender,email,cnumber,empid,pass,cpass,dpt,designation,doj)
VALUES ('$firstname','$lastname','$gender','$email','$cnumber','$empid','$pass','$cpass','$dpt','$designation','$doj')";
 
if ($conn->query($sql)==TRUE) {
  
    
  $message = "Registration successful!"; // Set your success message here
  header('Location: index.php?message=' . urlencode($message)); // Redirect to home page with message parameter
  exit;
   
  
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;

exit;
}
?>
