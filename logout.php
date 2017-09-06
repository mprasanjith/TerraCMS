<?php
    // load config file
    require_once("config.php");

    // logout user
    require_once(BACKEND_PATH . "/logout.php");

    // redirect back to home page
    header("location: /index.php");
    exit();
?>