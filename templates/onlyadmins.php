<?php
    // load config file
    require_once("../config.php");

    // setup database connection
    require_once(BACKEND_PATH . "/db.php");
    $conn = connectDatabase($db);
    
    session_start();
    
    // redirect not logged in users to login page
    if (!isset($_SESSION['user']))
    {
        header("Location: /account.php");
        die();
    }
    else
    {
        // if the user is logged in, check if account is admin
        $userId = $_SESSION['user'];
        $queryUserType = "SELECT userType from Users WHERE userId = $userId";
        $queryResult = queryDatabase($conn, $queryUserType);
        
        $row = mysqli_fetch_assoc($queryResult);
        
        if ($row["userType"] != "1") 
        {
            header("Location: /hub/index.php");
            die();
        }
    }
?>