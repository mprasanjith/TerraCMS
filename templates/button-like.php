<?php
    if (isset($_SESSION["user"]))
    {
    
        $userId = $_SESSION["user"];
        $checkLikedQuery = "SELECT DISTINCT * FROM Likes WHERE projectId=$projectId AND userId=$userId";
        $queryResult = queryDatabase($conn, $checkLikedQuery);
        $alreadyLiked = (mysqli_num_rows($queryResult)) ? true : false;
        
    }
    else
    {
        $alreadyLiked = false;
    }
?>

<button class="btn btn-outline-secondary mt-1" onclick="toggleLike(<?php echo $projectId ?>)"><?php echo ($alreadyLiked) ? "Unlike" : "Like" ?> this project</button>