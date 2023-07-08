<?php $current_page = basename($_SERVER['PHP_SELF']);
include 'm_nav.php' ?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-LHTGNdKs0s1y52W1XabBvZ0m0Mggsnw2mfb1rbHwVn0nOtI5eVQcGMf08VVnFhKkYBWa34ZdG+r6u+Bw/jRflw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<style>
		.img {
			height: 7%;
			width: 20%;
		}

		body {
			background-image: url('https://cdn.pixabay.com/photo/2013/03/20/17/00/office-95311_960_720.jpg');
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;

		}

		.bg-primary1 {
			background-color: #007bffa8;
		}
	</style>
</head>

<body>
<?php if(isset($_GET['message']) && !empty($_GET['message']) && $_GET['message'] == "Registration successful!") { ?>
	<div class="alert alert-success">
    <!-- you missed this line of code -->
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Success!</strong> Registration.
    </div>
  <?php } ?>
	<!-- Navigation bar -->
	

	<!-- Jumbotron -->
	<div class="jumbotron jumbotron-fluid bg-primary1 text-white">
		<div class="container">
			<h1 class="display-4">Welcome to Employee Time-off System!</h1>
			<p class="lead">A comprehensive Time-Off system to streamline the leave application and approval
				process.</p>
			<a class="btn btn-light btn-lg" href="#" role="button">Get Started</a>
		</div>
	</div>

	<!-- Features section -->
	<section class="py-5 ">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Easy Leave Application</h4>
							<p class="card-text">Apply for leave easily using the online form. No more paper forms!</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Quick Approval</h4>
							<p class="card-text">Leave applications are quickly processed and approved by managers.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<h4 class="card-title">Real-time Leave Balance</h4>
							<p class="card-text">View your leave balance in real-time and plan your leaves accordingly.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Call to Action -->
	<section class="bg-dark text-white py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h2>Ready to streamline your leave management?</h2>
					<p class="lead">Sign up today and start using EmployeeTime-off System!</p>
				</div>
				<div class="col-md-4">
					<a class="btn btn-lg btn-outline-light btn-block" href="registration.php" role="button">Sign Up
						Now</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
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
					<p>123 Main St<br>Satna, India<br>Phone: 9630830381<br>Email: rahulanuragsingh@gmail.com</p>
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

</body>

</html>