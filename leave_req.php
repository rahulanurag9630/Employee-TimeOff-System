<?php $current_page = basename($_SERVER['PHP_SELF']); ?>

<?php
// Include the navigation.php file
include 'nav.php';

session_start();


$email=$_SESSION["email"];
$host="localhost";
$db_user="root";
$db_password="";
$db_name="emp_time_off";
$conn=mysqli_connect($host,$db_user,$db_password,$db_name)or die("connection error". mysqli_connect_error());
if($conn){

$sick="SELECT SUM(days) AS total_sick_leave_days FROM leaves WHERE email = '".$email."' AND leave_type = 'Sick Leave'";
$result = mysqli_query($conn, $sick);
$row = mysqli_fetch_assoc($result);
$total=$row["total_sick_leave_days"];

$casual="SELECT SUM(days) AS total_sick_leave_days FROM leaves WHERE email = '".$email."' AND leave_type = 'Casual Leave'";
$result2 = mysqli_query($conn, $casual);
$row2 = mysqli_fetch_assoc($result2);
$total2=$row2["total_sick_leave_days"];

$prive="SELECT SUM(days) AS total_sick_leave_days FROM leaves WHERE email = '".$email."' AND leave_type = 'Privilege'";
$result3 = mysqli_query($conn, $prive);
$row3 = mysqli_fetch_assoc($result3);
$total3=$row3["total_sick_leave_days"];

$sql1="SELECT * FROM `registration` where email='".$email."'";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Leave Request Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
	
		function countDays() {
			// Get the start and end date values from the form
			var startDate = document.getElementById("sdate").value;
			var endDate = document.getElementById("edate").value;
      console.log(startDate);
			
			// Convert the date strings into Date objects
			var start = new Date(startDate);
			var end = new Date(endDate);
			
			// Calculate the difference in days
			var days = Math.floor((end - start) / (1000 * 60 * 60 * 24));
			
			// Update the result element with the number of days
			document.getElementById("result").value =  days;
      console.log(days);
		}
	</script>
	 <script >

        

    </script>
</head>
<body>

	<div class="container">
       
		<h3>Allowcated leaves</h3>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Leave Type</th>
                <th scope="col">Allowcated Leaves</th>
                <th scope="col">Used Leaves</th>
               
                <th scope="col">Available Leaves</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Casual</td>
                <td>20</td>
                <td id="usel"><?php echo $total2   ?></td>
                
                <td id="aval"><?php $m2=20-$total2; echo $m2; ?></td>
               
              </tr>
              <tr>
                
                <td>Privilege</td>
                <td>20</td>
				<td id="usel2"><?php echo $total3   ?></td>
                
                <td id="aval2"><?php $m3=20-$total3; echo $m3; ?></td>
              </tr>
              <tr>
                <td>Sick Leave</td>
                <td>10</td>
                <td id="usel3"><?php echo $total   ?></td>
                
                <td id="aval3"><?php $m=10-$total; echo $m; ?></td>

               
              </tr>
            </tbody>
          </table>
		  <div id="chartContainer1" class="col-4" style="height: 300px; width: 33%; display: inline-block;"></div>
		  <div id="chartContainer2" class="col-4" style="height: 300px; width: 33%; display: inline-block;"></div>
		  <div id="chartContainer3" class="col-4" style="height: 300px; width: 33%; display: inline-block;"></div>

		<form action="leave_conn.php" method="POST">
    <div class="form-group ">
				<label for="start-date">Enter Your Email</label>
				<input type="email" class="form-control disable" id="start-date" name="email" value="<?php echo $email;  ?>" required disabled>
			</div>
			<div class="form-group">
				<label for="leave-type">Leave Type:</label>
				<select class="form-control" id="leave-type" name="leave_type">
					<option >Casual Leave</option>
					<option >Sick Leave</option>
					<option >Privilege </option>
				</select>
			</div>
			<div class="form-group">
				<label for="start-date">Start Date:</label>
				<input type="date" class="form-control" id="sdate" name="s_date" required>
			</div>
			<div class="form-group">
				<label for="end-date">End Date:</label>
				<input type="date" class="form-control" oninput="countDays()" id="edate" name="e_date" required>
        
        <input type="hidden" name="days" id="result" value=" ">
			</div>
			<div class="form-group">
				<label for="reason">Reason:</label>
				<textarea class="form-control" id="reason" name="reason" rows="5" required></textarea>
			</div>
			<input type="hidden" name="status" value="pending">
			<button type="submit" class="btn btn-primary">Submit Request</button>
		</form>
	</div>
	<script>
	var a= document.getElementById("usel").textContent;
    var b = document.getElementById("aval").textContent;
	var c= document.getElementById("usel2").textContent;
    var d = document.getElementById("aval2").textContent;
	var e= document.getElementById("usel3").textContent;
    var f = document.getElementById("aval3").textContent;
	console.log();
    window.onload = function () {
      var chart1 = new CanvasJS.Chart("chartContainer1", {
        title: {
          text: "chart of Casual leaves"
        },
        data: [
          {
            type: "doughnut",
            dataPoints: [
              { y: a, indexLabel: "Used" },
              { y: b, indexLabel: "Remaining" }             
            ]
          }
        ]
      });
    
	  var chart2 = new CanvasJS.Chart("chartContainer2", {
        title: {
          text: "chart of privilages "
        },
        data: [
          {
            type: "doughnut",
            dataPoints: [
              { y: c, indexLabel: "used" },
              { y: d, indexLabel: "remaining" },
             
            ]
          }
        ]
      });
      var chart3 = new CanvasJS.Chart("chartContainer3", {
        title: {
          text: "chart of sick leaves"
        },
        data: [
          {
            type: "doughnut",
            dataPoints: [
              { y: e, indexLabel: "used" },
              { y: f, indexLabel: "remaining" },
             
            ]
          }
        ]
      });

      chart1.render();
      chart2.render();
      chart3.render();
   
	}
</script>
</body>
</html>
