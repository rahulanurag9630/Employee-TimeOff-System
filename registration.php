<!DOCTYPE html>
<html>

<head>
	<title>Employee Registration</title>
	<!-- Add Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<style>
		.img {
			height: 7%;
			width: 20%;
		}
		#e,#m,#pa,#p{
			color: red;
		}
	</style>
	<script defer src="valid.js"></script>
</head>

<body>
	<!-- Navigation bar -->
	<?php include 'm_nav.php';  ?>
	<div class="container mt-4">
		<div class="card">
			<div class="card-header bg-info text-white">
				<h4>Employee Registration</h4>
			</div>
			<div class="card-body">
				<form action="reg_con.php" method="post">
					<div class="form-group">
						<label for="firstName">First Name</label>
						<input type="text" name="firstname" class="form-control" id="firstName" placeholder="Enter your first name" required>
					</div>
					<div class="form-group">
						<label for="lastName">Last Name</label>
						<input type="text" name="lastname" class="form-control" id="lastName" placeholder="Enter your last name">
					</div>
					<label for="lastName">Gender</label>
					<div class="form-check" required>
						
						<input class="form-check-input" value="male" type="radio" name="gender" id="flexRadioDefault1" required>
						<label class="form-check-label" for="flexRadioDefault1">
						 Male
						</label>
					  </div>
					  <div class="form-check">
						<input class="form-check-input" value="female" type="radio" name="gender" id="flexRadioDefault2" checked required>
						<label class="form-check-label" for="flexRadioDefault2">
						  Female
						</label>
					  </div>
					  <div class="form-check">
						<input class="form-check-input" value="other" type="radio" name="gender" id="flexRadioDefault2" checked>
						<label class="form-check-label" for="flexRadioDefault2">
						  Other
						</label>
					  </div><br>
					<div class="form-group">
						<label for="email">Email address</label>
						<input type="email" name="email" oninput="cemail()" class="form-control" id="email" placeholder="Enter your email" required><p id="e"></p>
					</div>
					<div class="form-group">
						<label for="lastName">Contact Number</label>
						<input type="number" name="cnumber" oninput="cmob()" class="form-control" id="mob" placeholder="Enter your last name" required><p id="m"></p>
					</div>
					<div class="form-group">
						<label for="lastName">Employee ID</label>
						<input type="number" name="empid" class="form-control" id="empid" placeholder="Enter your last name" required>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" oninput="cpass1()" name="pass" class="form-control"  id="password" placeholder="Enter your password" minlength="7" required><p id="pa"></p>
					</div>
					<div class="form-group">
						<label for="confirmPassword">Confirm Password</label>
						<input type="password" oninput="checkpass()" name="cpass" class="form-control" id="confirmPassword"
							placeholder="Confirm your password" required><p id="p"></p>
					</div>
					<div class="form-group">
						<label for="dpt">Department</label>
						<select class="form-select form-control" name="dpt" aria-label="Default select example">
							<option selected>Department</option>
							<option >Administration</option>
							<option >Technical Support</option>
							<option >Communication</option>
							<option >Development</option>

						</select>
					</div>
					<div class="form-group">
						<label for="dsg">Designation</label>
						<select class="form-select form-control" name="designation" aria-label="Default select example">
							<option selected>Designation</option>
							<option >IT project manager</option>
							<option >System engineering</option>
							<option >Network engineering</option>
							<option >Programmer</option>
							<option >Software Tester</option>

						</select>
					</div>
					<div class="form-group">
						<label for="lastName">Date of Joining</label>
						<input type="date" class="form-control" name="doj" id="doj" placeholder="Enter your last name" required>
					</div>
					<button type="submit" class="btn btn-primary">Register</button>
				</form>
			</div>
		</div>
	</div>
	<!-- Add Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>