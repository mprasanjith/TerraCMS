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
        $projectId = (int)$_GET["id"];
        $userId = $_SESSION['user'];
        
        // if a projectid is present
        if ($projectId) 
        {
            // check if the project has already been liked
            $checkLikedQuery = "SELECT DISTINCT * FROM Likes WHERE projectId=$projectId AND userId=$userId";
            $queryResult = queryDatabase($conn, $checkLikedQuery);
            
            if (mysqli_num_rows($queryResult))
            {
                // Already liked
                $row = mysqli_fetch_assoc($queryResult);
                $likedId = $row["likedId"];
                $removeLikeQuery = "DELETE FROM Likes WHERE likedId=$likedId";
                queryDatabase($conn, $removeLikeQuery);
                echo "unliked";
            }
            else
            {
                // Add a like
                $addLikeQuery = "INSERT INTO Likes(userId, projectId) VALUES($userId, $projectId)";
                queryDatabase($conn, $addLikeQuery);
                echo "liked";
            }
        }
    }
    else
    {
        echo "notloggedin";
    }
?>