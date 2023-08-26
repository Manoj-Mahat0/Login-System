<!-- fb-callback.php -->
<?php
// This page is where Facebook redirects after user logs in and grants permissions

$code = $_GET['code'];
$redirectUri = 'https://beeown.com'; // Replace with your callback URL

// Redirect to your backend script for handling the access token
header("Location: handle-fb-login.php?code=$code");
exit();
?>
