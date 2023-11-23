<?php
session_start();

if (empty($_SESSION["user"])) {
    header("Location: index.php");
    exit();
}

$username = $_SESSION["user"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dashboard-container">
        <h2>Welcome, <?php echo $username; ?>!</h2>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>