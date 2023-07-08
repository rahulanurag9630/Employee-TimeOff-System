<?php
// Start the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Set the session cookie to expire
if (isset($_COOKIE[session_name()])) {
  setcookie(session_name(), '', time() - 86400, '/');
}

// Destroy the session
session_destroy();

// Set a flag in a cookie to indicate that the user is logged out
setcookie('logged_out', 'true', time() + 3600, '/');
header("location:index.php")


?>