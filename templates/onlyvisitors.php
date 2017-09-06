<?php
    session_start();
    
    // redirect not logged in users to login page
    if (isset($_SESSION['user']))
    {
        header("Location: /hub/index.php");
        die();
    }
?>