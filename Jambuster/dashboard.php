<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* Styles for user info */
        .user-info {
            position: absolute;
            top: 10px;
            right: 10px;
        }
    </style>
</head>
<body>
    <div class="user-info">
        <!-- Display the username -->
        <?php echo isset($_GET['root']) ? htmlspecialchars($_GET['root']) : ''; ?>
    </div>
    <!-- Other content of the dashboard page goes here -->
</body>
</html>
