<?php
// Start the session
session_start();

// Clear all session variables
session_unset();

// Destroy the session
session_destroy();

// Delete all cookies by setting their expiration to the past
foreach ($_COOKIE as $cookieName => $cookieValue) {
    // Set each cookie to expire in the past
    setcookie($cookieName, '', time() - 3600, '/'); // Expire cookie, '/' ensures it's removed across the entire site
}

// Redirect the user to the login page or homepage after logout
header('Location: /login');
exit();
