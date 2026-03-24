<?php
session_start();

// Check login
if (!isset($_SESSION['user'])) {

    // If cookie exists, restore session
    if (isset($_COOKIE['user'])) {
        $_SESSION['user'] = $_COOKIE['user'];
    } else {
        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?> 🎉</h2>

<a href="logout.php">Logout</a>

</body>
</html>
