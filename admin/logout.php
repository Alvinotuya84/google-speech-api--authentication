<!DOCTYPE html>
<html>
    <body>
        <h1>you have logged out redirect in seconds!! <?php?></h1>
    </body>
</html>
<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: login.php");
exit;
?>

