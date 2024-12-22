<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error() );
}

// Retrieve form data
$email = $_POST["myemail"];
$password = $_POST["password"];

// Fetch user information from the database
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User found, verify password
    $row = $result->fetch_assoc();
    if (password_verify($password, $row["password"])) {
        // Password is correct, redirect to user info page
        header("Location: user_info.php?username=" . urlencode($row["username"]) . "&email=" . urlencode($row["email"]));
        exit();
    } else {
        // Incorrect password
        echo "Incorrect password";
    }
} else {
    // User not found
    echo "User not found";
}

$conn->close();
?>
