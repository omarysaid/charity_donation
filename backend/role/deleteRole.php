<?php
include("../connections/connection.php");
$role_id = $_REQUEST['role_id'];
$query = "DELETE FROM role WHERE role_id=$role_id";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));

// Check if deletion was successful
if ($result) {
    // Redirect to view.php with success message
    header("Location: ./allRoles.php?success=1");
} else {
    // Redirect to view.php with failure message
    header("Location: ./allRoles.php?success=0");
}
exit();