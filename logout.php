<?php
session_start();
session_destroy();  // Destroy the session
header("Location: signin.html");  // Redirect to the login page
exit();
?>
