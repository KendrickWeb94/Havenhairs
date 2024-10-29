<?php
session_start(); // Start the session

// Destroy all session variables
$_SESSION = array(); // Clear the session array

// Destroy the session
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
}
session_destroy(); // Destroy the session

// Redirect to the login page
header("Location: ./Admin-login.php");
exit();
?>
