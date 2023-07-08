

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
        .navbar{
            background-color: #212529;
        }
        .navbar-nav .active {
    background-color: #007bff;
    color: #fff;
}
.aa {
  box-shadow: 0 18px 18px rgba(0, 0, 0, 0.2);
}
        </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark aa" style=" background-color: #212529;">
                <div class="container">
                    <a class="navbar-brand" href="#"><img class="img" src="Time off.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item <?php echo $current_page == 'admin_dash.php' ? 'active' : ''; ?>">
                            <a class="nav-link" href="admin_dash.php"><i class="fa fa-home "></i></i>Home</a>
                        </li>
                        <li class="nav-item <?php echo $current_page == 'emp_data.php' ? 'active' : ''; ?>">
                            <a class="nav-link" href="emp_data.php"><i class="fa fa-user "></i> Employees</a>
                        </li>
                        <li class="nav-item <?php echo $current_page == 'view_leave.php' ? 'active' : ''; ?>">
                            <a class="nav-link" href="view_leave.php">Leave Request</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php"><i class="fa fa-sign-out mx"></i>Logout</a>
                        </li>
                    </ul>
                </div>
                </div>
            </nav>
            
</body>
</html>