
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


$sql="SELECT * FROM leaves";

                           
 include 'a_nav.php';
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
	<title>Employee Leave Requests - Admin Panel</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Custom CSS -->
	<style>
		.container {
			margin-top: 50px;
		}
		h1 {
			margin-bottom: 50px;
		}
		table {
			border-collapse: collapse;
			width: 100%;
			margin-bottom: 50px;
		}
		th, td {
			padding: 15px;
			text-align: center;
			border: 1px solid #ddd;
		}
		th {
			background-color: #f2f2f2;
		}
		.approve-btn, .reject-btn {
			padding: 10px;
			font-size: 16px;
			border-radius: 5px;
			cursor: pointer;
		}
		.approve-btn {
			background-color: #28a745;
			color: #fff;
			margin-right: 10px;
		}
		.reject-btn {
			background-color: #dc3545;
			color: #fff;
		}
        
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

	<div class="container">
		<h1>Employee Leave Requests</h1>
		<table>
			<thead>
				<tr>
					<th>Employee Name</th>
					<th>Leave Type</th>
					<th>Start Date</th>
					<th>End Date</th>
					<th>Reason</th>
                    <th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
            <?php
                            $results=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($results)){
                            ?>
				<tr>
                <?php  $row['id']; ?>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['leave_type']; ?></td>
					<td><?php echo $row['s_date']; ?></td>
					<td><?php echo $row['e_date']; ?></td>
					<td><?php echo $row['reason']; $status=$row['status']?></td>
                    <td class="<?php echo $status == 'pending' ? 'text-warning' : ($status == 'approved' ? 'text-success' : 'text-danger'); ?>"><?php echo $status; ?></td>

					<td>
                    <form action="update_status.php" method="POST">
                       <input type="hidden" name="leave_id" value="<?php echo $row['id']; ?>">
					   <input type="hidden" name="days" value="<?php echo $row['days']; ?>">
                       <button type="submit" name="approve" class="approve-btn">Approve</button>
                       <button type="submit" name="reject" class="reject-btn">Reject</button>
                    </form>
					</td>
				</tr>
            <?php } ?>
				
				
			</tbody>
		</table>
	</div>

	<!-- Bootstrap JS -->
	</body>
</html>

