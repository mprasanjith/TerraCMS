<?php
    // load config file
    require_once("../config.php");

    // setup database connection
    require_once(BACKEND_PATH . "/db.php");
    $conn = connectDatabase($db);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if ($name && $email && $message) {
        // use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($message, 70);
        
        // set email headers
        $headers = "From: $email" . "\r\n";
        
        // send email
        mail("mprasanjith@gmail.com", "Contact Form Message - $name", $msg, $headers);
        echo "sent";
    } else {
        echo "error";
    }
?>