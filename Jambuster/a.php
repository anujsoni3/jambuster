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
$RUname = $_POST['RUname'];
$RPass = $_POST['RPass'];

// Insert the user into the database
$sql = "INSERT INTO users (Uname, Pass) VALUES ('$RUname', '$RPass')";

if (mysqli_query($conn, $sql)) {
	// Registration successful
	echo "success";
} else {
	// Registration failed
	echo "failure";
}

mysqli_close($conn);
?>