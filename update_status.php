<?php
// set database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emp_time_off";
 
// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the leave ID and new status from the form
$leave_id = $_POST['leave_id'];
$new_status = isset($_POST['approve']) ? 'approved' : 'rejected';
$new_days = ($new_status === 'rejected') ? 0 : $_POST['days'];

// Check the current status of the leave request
$stmt = $conn->prepare("SELECT status FROM leaves WHERE id = ?");
$stmt->bind_param("i", $leave_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $current_status = $row['status'];

    // Only update if the current status is not already approved or rejected
    if ($current_status !== 'approved' && $current_status !== 'rejected') {
        // Update the status and days of the leave request in the database
        $sql = "UPDATE leaves SET status = ?, days = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sii", $new_status, $new_days, $leave_id);
        $stmt->execute();
    }
}




// Redirect the user back to the page with the leave requests
header('Location: view_leave.php');
exit;
?>
