<?php
session_start();

// Destroy session
session_unset();
session_destroy();

// Delete cookie
if (isset($_COOKIE['user'])) {
    setcookie("user", "", time() - 3600, "/");
}

header("Location: login.php");
exit();
?>
