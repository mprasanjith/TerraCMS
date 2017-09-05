<?php
    // load config file
    require_once("../config.php");

    // setup database connection
    require_once(BACKEND_PATH . "/db.php");
    $conn = connectDatabase($db);

    $email = $_POST['login']['email'];
    $password = $_POST['login']['password'];
    $keepSignedIn = $_POST['login']['keepSignedIn'];

    // Check whether email exists in the database
    $sqlCheckUser = "SELECT DISTINCT * FROM users WHERE email='$email' AND passwrd='$password'";
    $queryResult = queryDatabase($conn, $sqlCheckUser);

    if (mysqli_num_rows($queryResult))
    {
        echo "Welcome user.";
    }
    else
    {
        echo "Wrong login.";
    }
?>