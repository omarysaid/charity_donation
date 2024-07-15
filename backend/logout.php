<?php
session_start();

// Destroy all session data
session_destroy();

// Redirect the user to the login page or any other desired destination
header("Location: ../index.php");
exit(); // Ensure that no further code is executed after redirection