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
    <style>
		.img {
			height: 7%;
			width: 20%;
		}
        .navbar{
            background-color: #212529;
        }
        .navbar-nav .active {
    background-color: #007bff;
    color: #fff;
}
        </style>
</head>
<body>
    <!-- Navigation bar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#"><img class="img" src="Time_off-removebg-preview.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item <?php echo $current_page == 'index.php' ? 'active' : ''; ?>">
                            <a class="nav-link " href="index.php"><i class="fa fa-home mx-1"></i></i>Home</a>
                        </li>
                        <li class="nav-item <?php echo $current_page == 'aboutus.php' ? 'active' : ''; ?>">
                            <a class="nav-link" href="aboutus.php"><i class="fa fa-exclamation-circle mx-1"></i> About</a>
                        </li>
                        <li class="nav-item <?php echo $current_page == '' ? 'active' : ''; ?>">
                            <a class="nav-link" href="contact.php"><i class="fa fa-envelope mx-1"></i> Contact</a>
                        </li>
                        <li class="nav-item <?php echo $current_page == 'login.php' ? 'active' : ''; ?>">
                            <a class="nav-link " href="login.php"><i class="fa fa-sign-in mx-1"></i>Login</a>
                        </li>
                        <li class="nav-item <?php echo $current_page == 'ad_login.php' ? 'active' : ''; ?>">
                            <a class="nav-link " href="ad_login.php"><i class="fa fa-sign-in mx-1"></i>Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

</body>
</html>