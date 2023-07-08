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
$email = $_POST['email'];
$leave_type = $_POST['leave_type'];
$s_date = $_POST['s_date'];
$e_date = $_POST['e_date'];
$reason = $_POST['reason'];
$days = $_POST['days'];
$status= $_POST['status'];





$sql = "INSERT INTO leaves (email, leave_type,s_date,e_date,reason,days,status)
VALUES ('$email','$leave_type','$s_date','$e_date','$reason','$days','$status')";
 
if ($conn->query($sql)==TRUE) {
  
    
 echo "request is submitted";
 header('location:leave_req.php');
   
  
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;

exit;
}
?>
