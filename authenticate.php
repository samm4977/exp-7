<?php
session_start();

// Dummy stored user (hashed password)
$stored_user = "admin";
$stored_pass_hash = password_hash("1234", PASSWORD_DEFAULT);

// Get form data safely
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Verify credentials
if ($username === $stored_user && password_verify($password, $stored_pass_hash)) {

    // Set session
    $_SESSION['user'] = $username;

    // Set cookie if "remember me" checked
    if (isset($_POST['remember'])) {
        setcookie("user", $username, time() + (7 * 24 * 60 * 60), "/"); // 7 days
    }

    header("Location: dashboard.php");
    exit();

} else {
    echo "❌ Invalid username or password!";
}
?>
