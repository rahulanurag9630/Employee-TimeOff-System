
<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

include 'a_nav.php';


session_start();


$email=$_SESSION["email"];
$host="localhost";
$db_user="root";
$db_password="";
$db_name="emp_time_off";
$conn=mysqli_connect($host,$db_user,$db_password,$db_name)or die("connection error". mysqli_connect_error());
if($conn){


$sql="SELECT * FROM `admin` where email='".$email."'";

}
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // If the user is not logged in, redirect to the login page
    header('Location: ad_login.php');
    exit;
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Time-Off System - Admin Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+J9ad6ukp9YfPqn1U0S6kDRT+Mkxs2" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navigation Bar -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        .img {
            height: 3%;
            width: 20%;
        }
        .bg-primary1 {
			background-color: #007bffa8;
		}
        </style>
</head>
<body>

            
</body>
</html>

    <!-- Main Content -->
    <div class="container-fluid">
        <h1 class="text-center my-4">Employee Time-Off System</h1>
        <div class="row">
            
            <!-- Main Content Area -->
             <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Employees</h5>
                                <p class="card-text">View and update your personal information.</p>
                                <a href="#" class="btn btn-primary">View </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">View Requests</h5>
                                <p class="card-text">Submit a new leave request. Lorem ipsum, dolor sit amet consectetur </p>
                                <a href="view_leave.php" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        <footer class="bg-light py-3">
		<div class="container text-center">
			<p>&copy; 2023 Employee Time-Off System. All Rights Reserved.</p>
		</div>
	</footer>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper-base.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
