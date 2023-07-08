<?php $current_page = basename($_SERVER['PHP_SELF']); ?>

<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");



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
    header('Location: login.php
    ');
    exit;
  }

?>

<?php
// Include the navigation.php file
include 'nav.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Employee Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Custom CSS -->

    <style>
        .img {
            height: 3%;
            width: 20%;
        }
        .bg-primary1 {
			background-color: #007bffa8;
		}
        body {
			background-image: url('https://cdn.pixabay.com/photo/2013/03/20/17/00/office-95311_960_720.jpg');
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;

		}
        .aa {
  box-shadow: 0 18px 18px rgba(0, 0, 0, 0.2);
}
    </style>
</head>

<body>

    <body>
        
            
            
            <div class="jumbotron jumbotron-fluid bg-primary1 text-white">
                <div class="container">
                    <h1 class="display-4">Welcome  <?php
                            $results=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($results)){
                            echo $row['firstname'];}?> to Employee Time-off System!</h1>
                    <p class="lead">A comprehensive Time-Off system to streamline the leave application and approval
                        process.</p>
                    <a class="btn btn-light btn-lg" href="#" role="button">Get Started</a>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 aa">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">My Profile</h5>
                                <p class="card-text">View and update your personal information.</p>
                                <a href="#" class="btn btn-primary">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 aa">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Leave Request</h5>
                                <p class="card-text">Submit a new leave request.</p>
                                <a href="leave_req.php" class="btn btn-primary">Request Leave</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 aa">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">My Leave History</h5>
                               
                                <p class="card-text">View your past leave requests and their status.</p>
                                <a href="view_leave_req.php" class="btn btn-primary">View Leave History</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-dark text-light">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>Quick Links</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4>Contact Us</h4>
                            <p>123 Main St<br>Anytown, USA<br>Phone: 555-123-4567<br>Email: info@example.com</p>
                        </div>
                        <div class="col-md-4">
                            <h4>Follow Us</h4>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
    </body>

</html>