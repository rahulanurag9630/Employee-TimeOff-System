<?php $current_page = basename($_SERVER['PHP_SELF']); ?>


<?php


session_start();


$email=$_SESSION["email"];
$host="localhost";
$db_user="root";
$db_password="";
$db_name="emp_time_off";
$conn=mysqli_connect($host,$db_user,$db_password,$db_name)or die("connection error". mysqli_connect_error());

if($conn){
    $sql="SELECT * FROM `leaves` where email='".$email."'";

}
include 'nav.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Leave Requests</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom CSS -->
    <style>
       
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
        .pending {
            color: #ffc107;
        }
        .approved {
            color: #28a745;
        }
        .rejected {
            color: #dc3545;
        }
    </style>
   
</head>
<body>
 

    <div class="container">
        <h1>My Leave Requests</h1>
        <table>
            <thead>
                <tr>
                    <th>Leave Type</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            <?php
                            $results=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($results)){
                            ?>
				<tr>
                <?php  $row['id']; ?>
					
					<td><?php echo $row['leave_type']; ?></td>
					<td><?php echo $row['s_date']; ?></td>
					<td><?php echo $row['e_date']; $status=$row['status'] ?></td>
					
                    <td class="<?php echo $status == 'pending' ? 'text-warning' : ($status == 'approved' ? 'text-success' : 'text-danger'); ?>"><?php echo $status; ?></td>

					
				</tr>
            <?php } ?>
               
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    
    </body>
    </html>