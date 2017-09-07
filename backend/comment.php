<?php
    session_start();
    
    // load config file
    require_once("../config.php");

    // setup database connection
    require_once(BACKEND_PATH . "/db.php");
    $conn = connectDatabase($db);
    
    // check if logged in
    if (isset($_SESSION['user']))
    {
        // get projectid from request
        $galleryItemId = (int)$_GET["id"];
        $commentData = $_GET["msg"];
        $userId = $_SESSION['user'];
        
        // if a projectid is present
        if ($galleryItemId) 
        {
            // Add comment
            $addCommentQuery = "INSERT INTO Comments(commentData, galleryItemId, userId) VALUES('$commentData', $galleryItemId, $userId)";
            queryDatabase($conn, $addCommentQuery);
            echo "added";
        }
    }
    else
    {
        echo "notloggedin";
    }
?>