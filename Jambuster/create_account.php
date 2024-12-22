<?php
$insert=false;
if(isset($_POST["username"])){
// Database connection settings
$servername = "localhost";
$username = "root";
$password = 1234;
//$dbname = "mydatabase";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error() );
}

// Retrieve form data
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

// Hash the password for security
//$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert user information into the database
$sql = "INSERT INTO `mydatabase`.users` (`username`, `email`, `password`) VALUES ('$username', '$email', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    // Redirect to dashboard.php
    //header("Location: dashboard.php?username=" . urlencode($username));
    echo "Successfully inserted";
    $insert=true;
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Poppins:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <?php
    if($insert==true){
        echo"<p>USER CREATED SUCCCESSFULLY</p>";
    }
    ?>
    <div class="login-container">
        <form name="createAccountForm" action="create_account.php" method="POST" onsubmit="return validateCreateAccountForm()">

            <p class="createaccount">Create Account</p>
            <label  for="name"><p class="ab">Username:</p></label>
            <input type="text" name="username" ID="username" class="username" placeholder="Username" required>
            <label  for="name"><p class="ab">Email</p></label>
            <input type="email" name="email" id="email" class="email" placeholder="Email" required>
            <label  for="name"><p class="ab">Password:</p></label>
            <input type="password" name="password" id="password" class="password" placeholder="Password" required>
            <button type="submit">Create Account</button>
        </form>
        <div class="options">
            <a href="index.html">Back to Login</a>
        </div>
    </div>
    <script src="script.js"></script>
    
</body>
</html>
