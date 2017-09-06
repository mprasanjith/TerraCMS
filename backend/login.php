<?php
    session_start();

    // load config file
    require_once("../config.php");

    // setup database connection
    require_once(BACKEND_PATH . "/db.php");
    $conn = connectDatabase($db);

    $email = $_POST['login']['email'];
    $password = $_POST['login']['password'];

    // Check whether email exists in the database
    $sqlCheckUser = "SELECT DISTINCT * FROM Users WHERE email='$email' AND passwrd='$password'";
    $queryResult = queryDatabase($conn, $sqlCheckUser);

    // Set sessions and redirect accordingly
    if (mysqli_num_rows($queryResult))
    {
        // Logged in.
        $row = mysqli_fetch_assoc($queryResult);
        $_SESSION['user'] = $row['userId'];
        header("Location: /");
        die();
    }
    else
    {
        // Wrong login.
        echo "Wrong login.";
    }
?>