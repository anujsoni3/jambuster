<?php
// Connect to the database
$host = "localhost";
$user = "root";
$password = "";
$dbname = "mydatabase";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Get the username and password from the request
$Uname = $_POST['Uname'];
$Pass = $_POST['Pass'];

// Check if the username and password are correct
$sql = "SELECT * FROM users WHERE Uname = '$Uname' AND Pass = '$Pass'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	// Login successful
	echo "success";
} else {
	// Login failed
	echo "failure";
}

mysqli_close($conn);
?>