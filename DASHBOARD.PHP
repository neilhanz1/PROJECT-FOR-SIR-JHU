<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Hi, <?php echo htmlspecialchars($_SESSION["username"]); ?>. Welcome to your dashboard.</h2>
    <p>
        <a href="logout.php">Sign Out</a>
    </p>
</body>
</html>