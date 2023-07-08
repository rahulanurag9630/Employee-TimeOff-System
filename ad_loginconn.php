<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emp_time_off";


session_start();
// Create connection
$data = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($data==false) {
  die("Connection failed: " );
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $email=$_POST["email"];
    $password=$_POST["pass"];

    $sql="select * from admin where email='".$email."' AND pass='".$password."'";
    
    $results=mysqli_query($data,$sql);
    $row=mysqli_fetch_assoc($results);
    
    if($row["email"]=="$email")
    { 
        $_SESSION['loggedin'] = true;
        $_SESSION["email"]=$email;
       
      
        header("location:admin_dash.php?msg=success");
        
    }
    else{
        header("location:login.php?msg=wrong");

    }

   
}


?>
 